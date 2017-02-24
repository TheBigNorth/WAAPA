<?php namespace Waapa\Config\Schema;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;
use \Illuminate\Database\Console\Migrations;

class Products
{

    public function __construct()
    {
        if (!Capsule::schema()->hasTable('products')) {
        Capsule::schema()
            ->create('products', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->integer('price');
                $table->timestamps();
            });
        }
    }
    
}
