<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
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
        $post->order = 1;
        request('publish')? $post->publish = true : $post->publish = false;
        $post->save();

        return response()->json([
            'post' => $post
        ]);
    }

    public function show($id){
        $post = post::find($id);
        return response()->json([
            'post' => $post
        ]);
    }

    public function update(CreatePostRequest $request, $id){
        $post = post::find($id);
        request('slug')? $post->slug = str_slug(request('slug')) : $post->slug = str_slug(request('title'));
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
}
