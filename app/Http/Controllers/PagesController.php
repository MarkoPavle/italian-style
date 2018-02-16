<?php

namespace App\Http\Controllers;

use App\Category;
use App\Collection;
use App\Post;
use App\Setting;
use App\Theme;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\LaravelLocalization;

class PagesController extends Controller
{
    public function index(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $collections = Collection::where('publish', 1)->where('parent', 0)->orderBy('order', 'ASC')->get();
        $posts = Post::where('publish', 1)->orderBy('publish_at', 'DESC')->get();
        $home = true;
        return view('themes.'.$theme->slug.'.pages.home', compact('settings', 'theme', 'collections', 'posts', 'home'));
    }

    public function collections($slug){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $parent = Collection::whereTranslation('slug', $slug)->first();
        $collections = Collection::where('parent', $parent->id)->orderBy('order', 'ASC')->get();
        $home = false;
        if(count($collections)>0){
            return view('themes.'.$theme->slug.'.pages.collections', compact('settings', 'theme', 'parent', 'collections', 'home'));
        }else{
            $products = $parent->product()->where('publish', 1)->get();
            if(count($products)==0){
                $parent = Collection::whereTranslation('slug', 'kitchens')->first();
                $products = $parent->product()->where('publish', 1)->get();
            }
            return view('themes.'.$theme->slug.'.pages.product', compact('settings', 'theme', 'parent', 'products', 'home'));
        }
    }

    public function parentCollections($slug1, $slug2){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $parent = Collection::whereTranslation('slug', $slug2)->first();
        $collections = Collection::where('parent', $parent->id)->orderBy('order', 'ASC')->get();
        $home = false;
        if(count($collections)>0){
            return view('themes.'.$theme->slug.'.pages.collections', compact('settings', 'theme', 'parent', 'collections', 'home'));
        }else{
            $products = $parent->product()->where('publish', 1)->get();
            if(count($products)==0){
                $parent = Collection::whereTranslation('slug', 'kitchens')->first();
                $products = $parent->product()->where('publish', 1)->get();
            }
            return view('themes.'.$theme->slug.'.pages.product', compact('settings', 'theme', 'parent', 'products', 'home'));
        }
    }

    public function contact(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        return view('themes.'.$theme->slug.'.pages.contact', compact('settings', 'theme', 'home'));
    }

    public function corporate(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        if(app()->getLocale() == 'en'){
            return view('themes.'.$theme->slug.'.pages.corporate.corporate', compact('settings', 'theme', 'home'));
        }else{
            return view('themes.'.$theme->slug.'.pages.corporate.azienda', compact('settings', 'theme', 'home'));
        }
    }

    public function partnership(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        return view('themes.'.$theme->slug.'.pages.partnership', compact('settings', 'theme', 'home'));
    }

    public function post(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        $related = [1,2,3,4,5,6];
        return view('themes.'.$theme->slug.'.pages.post', compact('settings', 'theme', 'home', 'related'));
    }

    public function promotions(){
        return 'in progress';
    }
}
