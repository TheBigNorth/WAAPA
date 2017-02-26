<?php namespace App\Wordpress;

use \Illuminate\Database\Console\Migrations;

class DB
{
    public static function init()
    {
        self::bootDatabase();
        self::schemas();
    }

    private static function bootDatabase()
    {
        $capsule = new \Illuminate\Database\Capsule\Manager;
        
        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => getenv('DB_HOST'),
            'database'  => getenv('DB_NAME'),
            'username'  => getenv('DB_USER'),
            'password'  => getenv('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]); 

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        date_default_timezone_set('UTC');
    }

    public static function schemas()
    {
        new \Waapa\Config\Schema\Products();
    }
}