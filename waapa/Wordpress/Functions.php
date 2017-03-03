<?php namespace Waapa\Wordpress;

use \Waapa\Routes;
use \Waapa\DB\EloquentConnection;

class Functions
{
    public static function init()
    {
        EloquentConnection::init();
        Routes::init();
    }
}