<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['post_id', 'file_name', 'file_path', 'file_path_small', 'publish'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
