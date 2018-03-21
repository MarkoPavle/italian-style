<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    public static function getHomeLink(){
        return array('en' => 'en', 'it' => 'it');
    }

    public static function removePTag($str=""){
        $str = str_replace('<p>', '', $str);
        $str = str_replace('</p>', '', $str);
        return $str;
    }
}
