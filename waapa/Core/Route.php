<?php namespace Waapa\Core;

use \Waapa\Middlewear\WordpressAuth;

class Route
{

    private $server;
    private $get;
    private $post;

    public function __construct(array $server, array $get, array $post)
    {
        $this->server = $server;
        $this->get = $get;
        $this->post = $post;
    }

    public function get($route, callable $func, array $middlewearOptions = [])
    {  

        if (!$this->getRequestType('get')) {
            return;
        }

        $this->callCallbackFunction('get', $route, $func, $middlewearOptions);
    }

    public function post($route, callable $func, array $middlewearOptions = [])
    {
        if (!$this->getRequestType('post')) {
            return;
        }

        $this->callCallbackFunction('post', $route, $func, $middlewearOptions);
    }

    private function callCallbackFunction($requestType, $route, callable $func, array $middlewearOptions = [])
    {
        
        list($args, $routes) = self::getURLArgs(
            self::getURIAsArray($route),
            self::getURIAsArray(self::getRequestURI($this->server))
        );
        
        if (!empty($args) || !empty($routes)) {
             $this->loopThroughMiddleWear($middlewearOptions);
             echo call_user_func_array($func, [$args, $this->getRequestKeyValues($requestType)]);
             exit;
        }
    }

    private function getRequestKeyValues($requestType)
    {
        $parameters = [];

        $request = $this->{$requestType};

        foreach($request as $key => $value) {
            $parameters[$key] = $value;
        }

        return $parameters;
    }

    private function getURLArgs($routeArray, $serverRouteArray)
    {
        $args = [];
        $routes = [];

        if (empty($routeArray) && empty($serverRouteArray)) {
            $args['default'] = '';
        }

        for ($i = 0; $i < count($routeArray); $i++) {
            $routeSegment = $routeArray[$i];
            $serverSegment = $serverRouteArray[$i];

            if (isset($routeSegment) && isset($serverSegment)
                && self::isRouteVariable($routeSegment)
                && count($routeArray) === count($serverRouteArray)
                && $i === 0) {
                $args[self::getPlaceholderFromString($routeSegment)] = $serverSegment;
                continue;
            }

            if (isset($routeSegment) && isset($serverSegment)
                && self::isRouteVariable($routeSegment)
                && count($routeArray) === count($serverRouteArray)
                && !empty($serverSegment)) {
                $args[self::getPlaceholderFromString($routeSegment)] = $serverSegment;
                continue;
            } 
            
            if (isset($routeSegment) && isset($serverSegment)
                && self::areEqualValues($routeSegment, $serverSegment)) {
                $routes[$routeSegment] = $serverSegment;
                continue;
            }
        
            unset($args);
            unset($routes);
            break;
            
        }

        return [$args, $routes];
    }

    private function areEqualValues($serverSegment, $routeSegment)
    {
        return $serverSegment === $routeSegment;
    }

    private function getPlaceholderFromString($string)
    {
        return str_replace(':', '', $string);
    }

    private function isRouteVariable($string) {
        return strpos($string, ':') > -1;
    }

    private function getRequestURI(array $server)
    {
        return explode('?', rtrim($this->server['REQUEST_URI'], '/'))[0];
    }

    private function getURIAsArray($uri)
    {   
        $array = explode('/', $uri);
        array_shift($array);
        return $array;
    }

    private function getRequestType($requestType)
    {
        return strtolower($_SERVER['REQUEST_METHOD']) === $requestType;
    }

    private function loopThroughMiddleWear(array $options)
    {
        
        if (!is_array($options)) {
            throw new \Exception('$options is not an array');
        }

        foreach ($options as $option) {
            $class = '\Waapa\Middlewear\\' . $option;
            $instance = new $class($this);
        }
    }
}