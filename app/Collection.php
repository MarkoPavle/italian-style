<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;
use File;

class Collection extends Model
{
    use Translatable;

    public static $list_limit = 50;

    public $translatedAttributes = ['title', 'slug', 'desc'];

    protected $table = 'collections';

    protected $fillable = ['id', 'order', 'parent', 'level', 'image', 'heroImage', 'heroImageMobile', 'publish'];

    public static function base64UploadImage($collection_id, $image){
        $collection = self::find($collection_id);
        if($collection->image != null){
            File::delete($collection->image);
        }
        $exploaded = explode(',', $image);
        $data = base64_decode($exploaded[1]);
        $filename = time() . '-' . $collection->id . '.jpg';
        $path = public_path('uploads/collections/');
        file_put_contents($path . $filename, $data);
        $collection->image = 'uploads/collections/' . $filename;
        $collection->update();
        return $collection->image;
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
