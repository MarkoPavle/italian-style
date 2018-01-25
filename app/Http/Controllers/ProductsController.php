<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UploadGalleryRequest;
use App\Photo;
use App\Product;
use Illuminate\Http\Request;
use File;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::select('products.id as id', 'product_translations.title as title', 'products.publish as publish', 'products.created_at as created_at')
            ->join('product_translations', 'products.id', '=', 'product_translations.product_id')
            ->orderBy('products.created_at', 'DESC')->groupBy('products.id')->paginate(3);
        return response()->json([
            'products' => $products,
        ]);
    }

    public function store(CreateProductRequest $request){
        app()->setLocale('en');
        $product = new Product();
        $product->title = request('title');
        request('slug')? $product->slug = str_slug(request('slug')) : $product->slug = str_slug(request('title'));
        $product->short = request('short');
        $product->body = request('body');
        $product->body2 = request('body2');
        request('publish')? $product->publish = true : $product->publish = false;
        $product->save();
        if(request('image')){ Product::base64UploadImage($product->id, request('image')); }

        return response()->json([
            'product' => $product
        ]);
    }

    public function show($id){
        request('locale')? $locale = request('locale') : $locale = 'en';
        app()->setLocale($locale);
        $product = Product::find($id);
        return response()->json([
            'product' => $product
        ]);
    }

    public function update($id){
        $product = Product::find($id);
        $product->collection_id = request('collection_id');
        request('publish')? $product->publish = true : $product->publish = false;
        $product->update();
        return response()->json([
            'message' => 'done'
        ]);
    }

    public function updateLang(CreateProductRequest $request, $id){
        request('locale')? $locale = request('locale') : $locale = 'en';
        app()->setLocale($locale);
        $product = Product::find($id);
        $product->title = request('title');
        request('slug')? $product->slug = str_slug(request('slug')) : $product->slug = str_slug(request('title'));
        $product->short = request('short');
        $product->body = request('body');
        $product->body2 = request('body2');
        $product->update($request->except('image', 'slug'));
        return response()->json([
            'product' => $product
        ]);
    }

    public function destroy($id){
        $product = Product::find($id);
        if(!empty($product->image)) File::delete($product->image);
        Product::destroy($product->id);
        return response()->json([
            'message' => 'deleted'
        ]);
    }

    public function uploadImage(UploadGalleryRequest $request, $id){
        $image = Product::base64UploadImage($id, request('file'));
        return response()->json([
            'image' => $image
        ]);
    }

    public function galleryUpdate($id){
        Photo::saveImage($id, request('file'));
        return 'done';
    }

    public function gallery($id){
        $photos = Product::find($id)->photo;
        return response()->json([
            'photos' => $photos
        ]);
    }
}
