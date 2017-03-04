<?php namespace Waapa\Controller;

abstract class BaseController
{
    protected static function redirect($path)
    {
        $url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
        $url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
        $url .= $path;            // <-- Your relative path
        header('Location: ' . $url, true); 
    }
}
