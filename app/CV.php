<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CV extends Model
{
    public static function uploadCv(Request $request){
        if($request->file('file')){
            $extension = $request->file('file')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $imagePath = 'uploads/cv/'.$imageName;
            $request->file('file')->move(base_path() . '/public/uploads/cv/', $imageName);
            return ['path' => $imagePath, 'extension' => $extension];
        }
        return null;
    }
}
