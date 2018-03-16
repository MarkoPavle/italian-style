<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CV extends Model
{
    public static function uploadCv(Request $request){
        if($request->file('file')){
            $imageName = time() . '.' . $request->file('file')->getClientOriginalExtension();
            $imagePath = 'uploads/cv/'.$imageName;
            $request->file('file')->move(base_path() . '/public/uploads/cv/', $imageName);
            return $imagePath;
        }
        return null;
    }
}
