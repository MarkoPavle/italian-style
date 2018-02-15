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

    public function collections($slug){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $parent = Collection::whereTranslation('slug', $slug)->first();
        $collections = Collection::where('parent', $parent->id)->orderBy('order', 'ASC')->get();
        return view('themes.'.$theme->slug.'.pages.collections', compact('settings', 'theme', 'parent', 'collections'));
    }

    public function contact(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        return view('themes.'.$theme->slug.'.pages.contact', compact('settings', 'theme'));
    }

    public function corporate(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        return view('themes.'.$theme->slug.'.pages.corporate', compact('settings', 'theme'));
    }

    public function partnership(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        return view('themes.'.$theme->slug.'.pages.partnership', compact('settings', 'theme'));
    }
}
