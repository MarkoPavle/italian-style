<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use File;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::select('posts.id as id', 'post_translations.title as title', 'posts.publish as publish', 'posts.created_at as created_at')
            ->join('post_translations', 'posts.id', '=', 'post_translations.post_id')
            ->orderBy('posts.created_at', 'DESC')->groupBy('posts.id')->paginate(3);
        return response()->json([
            'posts' => $posts,
        ]);
    }

    public function store(CreatePostRequest $request){
        app()->setLocale('en');
        $post = new Post();
        $post->title = request('title');
        request('slug')? $post->slug = str_slug(request('slug')) : $post->slug = str_slug(request('title'));
        $post->short = request('short');
        $post->body = request('body');
        $post->body2 = request('body2');
        request('publish')? $post->publish = true : $post->publish = false;
        $post->save();
        if(request('image')){ Post::base64UploadImage($post->id, request('image')); }

        return response()->json([
            'post' => $post
        ]);
    }

    public function show($id){
        request('locale')? $locale = request('locale') : $locale = 'en';
        app()->setLocale($locale);
        $post = Post::find($id);
        return response()->json([
            'post' => $post
        ]);
    }

    public function update($id){
        $post = Post::find($id);
        $post->category_id = request('category_id');
        request('publish')? $post->publish = true : $post->publish = false;
        $post->update();
        return response()->json([
            'message' => 'done'
        ]);
    }

    public function updateLang(CreatePostRequest $request, $id){
        request('locale')? $locale = request('locale') : $locale = 'en';
        app()->setLocale($locale);
        $post = Post::find($id);
        $post->title = request('title');
        request('slug')? $post->slug = str_slug(request('slug')) : $post->slug = str_slug(request('title'));
        $post->short = request('short');
        $post->body = request('body');
        $post->body2 = request('body2');
        $post->update($request->except('image', 'slug'));
        return response()->json([
            'post' => $post
        ]);
    }

    public function destroy($id){
        $post = Post::find($id);
        if(!empty($post->image)) File::delete($post->image);
        Post::destroy($post->id);
        return response()->json([
            'message' => 'deleted'
        ]);
    }

    public function uploadImage($id){
        $image = Post::base64UploadImage($id, request('image'));
        return response()->json([
            'image' => $image
        ]);
    }

    public function gallery($id){
        Photo::saveImage($id, request('file'));

        return 'http://localhost/cim/public/uploads/posts/1516631926-6.jpg';
    }
}
