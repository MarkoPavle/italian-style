<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;
use File;

class Post extends Model
{
    use Translatable;

    public static $list_limit = 50;

    public $translatedAttributes = ['title', 'slug', 'short', 'body', 'body2'];

    protected $table = 'posts';

    protected $fillable = ['id', 'brand_id', 'order', 'parent', 'level', 'image', 'price', 'publish', 'publish_at'];

    public static function base64UploadImage($post_id, $image){
        $post = self::find($post_id);
        if($post->image != null){
            File::delete($post->image);
        }
        $exploaded = explode(',', $image);
        $data = base64_decode($exploaded[1]);
        $filename = time() . '-' . $post->id . '.jpg';
        $path = public_path('uploads/posts/');
        file_put_contents($path . $filename, $data);
        $post->image = 'uploads/posts/' . $filename;
        $post->update();
        return $post->image;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function photo(){
        return $this->hasMany(Photo::class);
    }
}
