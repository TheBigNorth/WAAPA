<?php namespace Waapa;

use \Waapa\Routes;
use \Waapa\DB\EloquentConnection;

class App
{
    public static function init()
    {
        EloquentConnection::init();
        Routes::init();
    }
}