<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Category extends Model
{
    use Translatable;

    public static $list_limit = 50;

    public $translatedAttributes = ['title', 'slug', 'desc'];

    protected $table = 'categories';

    protected $fillable = ['id', 'brand_id', 'order', 'parent', 'level', 'image', 'publish'];

    public function post(){
        return $this->hasMany(Post::class);
    }
}
