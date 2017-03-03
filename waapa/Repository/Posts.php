<?php namespace Waapa\Repository;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table;

    public function __construct($attributes = array())
    {
        parent::__construct($attributes);
        $this->table = getenv('TABLE_PREFIX') . 'posts';
    }
}