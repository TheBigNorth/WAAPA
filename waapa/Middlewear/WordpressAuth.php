<?php namespace Waapa\Middlewear;

use \Waapa\Core\Route;

class WordpressAuth
{
    public function __construct(Route $route)
    {
        if (!is_user_logged_in()) {
            exit('You do not have access');
        }
        
        return $this;
    }
}