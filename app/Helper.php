<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function getHomeLink(){
        return array('en' => 'it', 'it' => 'en');
    }
}
