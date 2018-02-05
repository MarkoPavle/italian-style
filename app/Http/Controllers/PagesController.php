<?php

namespace App\Http\Controllers;

use App\Category;
use App\Collection;
use App\Post;
use App\Setting;
use App\Theme;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $collections = Collection::where('publish', 1)->where('parent', 0)->orderBy('order', 'ASC')->get();
        $posts = Post::where('publish', 1)->orderBy('publish_at', 'DESC')->get();
        return view('themes.'.$theme->slug.'.pages.home', compact('settings', 'theme', 'collections', 'posts'));
    }
}
