<?php namespace App\Core;

class Route
{

    private $server;
    private $get;
    private $post;

    public static function init(array $server, array $get, array $post)
    {
        return new self($server, $get, $post);
    }

    private function __construct(array $server, array $get, array $post)
    {
        $this->server = $server;
        $this->get = $get;
        $this->post = $post;
    }

    public function get($route, callable $func)
    {  
        
        list($args, $routes) = self::getURLArgs(
            self::getURIAsArray($route),
            self::getServerURIArray($_SERVER)
        );
 
        if (!empty($args) || !empty($routes)) {
             echo call_user_func_array($func, [$args]);
             exit;
        }
       
    }

    private function getURLArgs($routeArray, $serverRouteArray)
    {
        $args = [];
        $routes = [];

        for ($i = 0; $i < count($routeArray); $i++) {
            $routeSegment = $routeArray[$i];
            $serverSegment = $serverRouteArray[$i];

            //echo '<pre>'; var_dump($routeSegment, $serverSegment); echo '</pre>';

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

    private function getArgs()
    {}

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

    private function getServerURIArray(array $server)
    {
        return self::getURIAsArray(self::getRequestURI($server)); 
    }

    private function getRequestURI(array $server)
    {
        return explode('?', $server['REQUEST_URI'])[0];
    }

    private function getURIAsArray($uri)
    {
        $array = explode('/', $uri);
        array_shift($array);
        return $array;
    }
}