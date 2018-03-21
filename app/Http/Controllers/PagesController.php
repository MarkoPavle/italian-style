<?php

namespace App\Http\Controllers;

use App\Category;
use App\Collection;
use App\CollectionTranslation;
use App\CV;
use App\Helper;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\UploadCvRequest;
use App\Mail\UploadCvMail;
use App\Post;
use App\Product;
use App\ProductTranslation;
use App\Setting;
use App\Slider;
use App\Theme;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\LaravelLocalization;

class PagesController extends Controller
{
    public function index(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $collections = Collection::where('publish', 1)->where('id', '<>', 24)->where('parent', 0)->orderBy('order', 'ASC')->get();
        $posts = Post::where('publish', 1)->orderBy('publish_at', 'DESC')->get();
        $home = true;
        $translate = Helper::getHomeLink();
        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('themes.'.$theme->slug.'.pages.home', compact('settings', 'theme', 'collections', 'posts', 'home', 'translate', 'sliders'));
    }

    public function collections($slug){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $parent = Collection::whereTranslation('slug', $slug)->first();
        $collections = Collection::where('parent', $parent->id)->orderBy('order', 'ASC')->get();
        $home = false;
        $translate = Collection::getCollectionLink($slug);
        if(count($collections)>0){
            return view('themes.'.$theme->slug.'.pages.collections', compact('settings', 'theme', 'parent', 'collections', 'home', 'translate'));
        }else{
            $product = $parent->product()->where('publish', 1)->first();
            if(empty($product)) return redirect('/');
            return redirect(Product::getProductsLink($product));
        }
    }

    public function parentCollections($slug1, $slug2){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $parent = Collection::whereTranslation('slug', $slug2)->first();
        $collections = Collection::where('parent', $parent->id)->orderBy('order', 'ASC')->get();
        $home = false;
        $translate = Collection::getParentCollectionLink($slug1, $slug2);
        if(count($collections)>0){
            return view('themes.'.$theme->slug.'.pages.collections', compact('settings', 'theme', 'parent', 'collections', 'home', 'translate'));
        }else{
            $product = $parent->product()->where('publish', 1)->first();
            return redirect(Product::getProductsLink($product));
        }
    }

    public function contact(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        $translate = array('en' => url('en/contact'), 'it' => url('it/contatto'));
        return view('themes.'.$theme->slug.'.pages.contact', compact('settings', 'theme', 'home', 'translate'));
    }

    public function corporate(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        $translate = array('en' => url('en/corporate'), 'it' => url('it/azienda'));
        if(app()->getLocale() == 'en'){
            return view('themes.'.$theme->slug.'.pages.corporate.corporate', compact('settings', 'theme', 'home', 'translate'));
        }else{
            return view('themes.'.$theme->slug.'.pages.corporate.azienda', compact('settings', 'theme', 'home', 'translate'));
        }
    }

    public function partnership(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        $translate = array('en' => url('en/partnership'), 'it' => url('it/partner'));
        return view('themes.'.$theme->slug.'.pages.work-with-us', compact('settings', 'theme', 'home', 'translate'));
    }

    public function news(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        $post = Post::first();
        $related = Post::where('id', '<>', $post->id)->where('publish', 1)->orderBy('publish_at', 'DESC')->paginate(6);
        $translate = Post::getTranslate($post);
        return view('themes.'.$theme->slug.'.pages.post', compact('settings', 'theme', 'home', 'related', 'post', 'translate'));
    }

    public function post($slug2, $id){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        $post = Post::find($id);
        $related = Post::where('id', '<>', $post->id)->where('publish', 1)->orderBy('publish_at', 'DESC')->paginate(6);
        $translate = Post::getTranslate($post);
        return view('themes.'.$theme->slug.'.pages.post', compact('settings', 'theme', 'home', 'related', 'post', 'translate'));
    }

    public function product($slug1, $slug2, $id){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $collection = Collection::whereTranslation('slug', $slug1)->first();
        $product = Product::find($id);
        $products = Product::where('id', '<>', $product->id)->where('collection_id', $collection->id)->orderBy('order', 'ASC')->get();
        $photos = $product->photo()->where('publish', 1)->orderBy('id', 'DESC')->get();
        $home = false;
        $translate = Product::getTranslate($product);
        $parent = null;
        return view('themes.'.$theme->slug.'.pages.product', compact('settings', 'theme', 'collection', 'products', 'home', 'translate', 'product', 'photos', 'parent'));
    }

    public function products($slug1, $slug2, $id){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $collection = Collection::whereTranslation('slug', $slug1)->first();
        $product = Product::find($id);
        $products = Product::where('collection_id', $collection->id)->orderBy('created_at', 'ASC')->paginate(12);
        $photos = $product->photo()->where('publish', 1)->orderBy('id', 'DESC')->get();
        $home = false;
        $translate = Product::getTranslateProducts($product);
        $parent = null;
        return view('themes.'.$theme->slug.'.pages.products', compact('settings', 'theme', 'collection', 'products', 'home', 'translate', 'product', 'photos', 'parent'));
    }

    public function product2($slug1, $slug2, $slug3, $id){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $parent = Collection::whereTranslation('slug', $slug1)->first();
        $collection = Collection::whereTranslation('slug', $slug2)->first();
        $product = Product::find($id);
        $products = Product::where('id', '<>', $product->id)->where('collection_id', $collection->id)->orderBy('order', 'ASC')->get();
        $photos = $product->photo()->where('publish', 1)->orderBy('id', 'DESC')->get();
        $home = false;
        $translate = Product::getTranslate($product);
        return view('themes.'.$theme->slug.'.pages.product', compact('settings', 'theme', 'parent', 'products', 'home', 'translate', 'product', 'photos', 'collection'));
    }

    public function products2($slug1, $slug2, $slug3, $id){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $parent = Collection::whereTranslation('slug', $slug1)->first();
        $collection = Collection::whereTranslation('slug', $slug2)->first();
        $product = Product::find($id);
        $products = Product::where('collection_id', $collection->id)->orderBy('created_at', 'ASC')->paginate(12);
        $photos = $product->photo()->where('publish', 1)->orderBy('id', 'DESC')->get();
        $home = false;
        $translate = Product::getTranslateProducts($product);
        return view('themes.'.$theme->slug.'.pages.products', compact('settings', 'theme', 'parent', 'products', 'home', 'translate', 'product', 'photos', 'collection'));
    }

    public function promotions(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        //$translate = array('en' => url('it/promozioni'), 'it' => url('en/promotions'));
        //return view('themes.'.$theme->slug.'.pages.promotions', compact('settings', 'theme', 'home', 'translate'));
        $collection = Collection::find(24);
        $product = Product::find(576);
        $products = Product::where('collection_id', $collection->id)->orderBy('created_at', 'ASC')->paginate(12);
        $home = false;
        $translate = array('en' => url('en/promotions'), 'it' => url('it/promozioni'));
        return view('themes.'.$theme->slug.'.pages.products', compact('settings', 'theme', 'collection', 'products', 'home', 'translate', 'product'));
    }

    public function sendForm(ContactFormRequest $request){
        return request()->all();
    }

    public function shopOnline(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        $home = false;
        //$translate = array('en' => url('it/promozioni'), 'it' => url('en/promotions'));
        //return view('themes.'.$theme->slug.'.pages.promotions', compact('settings', 'theme', 'home', 'translate'));
        $collection = Collection::find(25);
        $product = Product::find(576);
        $products = Product::where('collection_id', $collection->id)->orderBy('created_at', 'ASC')->paginate(12);
        $home = false;
        $translate = array('en' => url('en/shop-online'), 'it' => url('it/vendita-on-line'));
        return view('themes.'.$theme->slug.'.pages.products', compact('settings', 'theme', 'collection', 'products', 'home', 'translate', 'product'));
    }

    public function proba(){
        /*$old = Post::first();

        for ($i=1;$i<=20;$i++){
            $new = new Post();
            $new->user_id = $old->user_id;
            $new->category_id = $old->category_id;
            $new->image = $old->image;
            $new->title = 'News post ' . $i;
            $new->slug = str_slug('News post ' . $i);
            $new->short = $old->short;
            $new->body = $old->body;
            $new->publish_at = Carbon::now();
            $new->publish = 1;
            $new->save();

            sleep(1);
        }*/
        /*$br=0;
        $collections = CollectionTranslation::all();
        foreach ($collections as $collection){
            if(empty($collection->slug)){
                $collection->slug = str_slug($collection->title);
                $collection->update();
                $br++;
            }
        }*/


        return 'done';
    }

    public function uploadCv(UploadCvRequest $request){
        $setting = Setting::first();
        $cv = CV::uploadCv($request);
        \Mail::to($setting->email1)->send(new UploadCvMail($cv['path'], $cv['extension']));
        return redirect('/');
    }
}
