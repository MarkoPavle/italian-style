<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;

class Slider extends Model
{
    protected $fillable = ['file_name', 'file_path', 'file_path_mobile', 'file_path_small', 'order', 'publish'];

    public static function saveImage($image){
        $folderPath = 'uploads/sliders';

        if(isset($image)){
            $imageName = 'sliders' . '-' . str_random(4) . '.' . $image->getClientOriginalExtension();
            $imagePath = $folderPath.'/'.$imageName;
            $imagePathMobile = $folderPath.'/mobile/'.$imageName;
            $imagePathTmb = $folderPath.'/small/'.$imageName;
            $image->move(public_path($folderPath . '/'), $imageName);
            File::copy(public_path($folderPath . '/'. $imageName), public_path($folderPath . '/small/'. $imageName));
            File::copy(public_path($folderPath . '/'. $imageName), public_path($folderPath . '/mobile/'. $imageName));

            self::cropImage($imagePathTmb, 226);
            self::cropMobileImage($imagePathMobile, 800, 600);

            $image = new Slider();
            $image->file_name = $imageName;
            $image->file_path = $imagePath;
            $image->file_path_mobile = $imagePathMobile;
            $image->file_path_small = $imagePathTmb;
            $image->publish = 1;
            $image->save();
        }

        return 'done';

    }

    public static function cropImage($image, $width){
        \Image::make($image)->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save($image);
    }

    public static function cropMobileImage($image, $width, $height){
        \Image::make($image)->fit($width, $height)->save($image);
    }
}
