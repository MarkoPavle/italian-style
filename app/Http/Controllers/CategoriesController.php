<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;
use File;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::select('categories.id as id', 'category_translations.title as title', 'categories.publish as publish', 'categories.created_at as created_at')
            ->join('category_translations', 'categories.id', '=', 'category_translations.category_id')
            ->orderBy('categories.created_at', 'DESC')->groupBy('categories.id')->paginate(3);
        return response()->json([
            'categories' => $categories,
        ]);
    }

    public function store(CreateCategoryRequest $request){
        app()->setLocale('en');
        $category = new Category();
        $category->title = request('title');
        request('slug')? $category->slug = str_slug(request('slug')) : $category->slug = str_slug(request('title'));
        $category->desc = request('desc');
        $category->order = 1;
        request('publish')? $category->publish = true : $category->publish = false;
        $category->save();

        return response()->json([
            'category' => $category
        ]);
    }

    public function show($id){
        $category = Category::find($id);
        return response()->json([
            'category' => $category
        ]);
    }

    public function update(CreateCategoryRequest $request, $id){
        $category = Category::find($id);
        request('slug')? $category->slug = str_slug(request('slug')) : $category->slug = str_slug(request('title'));
        $category->update($request->except('image', 'slug'));
        return response()->json([
            'category' => $category
        ]);
    }

    public function destroy($id){
        $category = Category::find($id);
        if(!empty($category->image)) File::delete($category->image);
        Category::destroy($category->id);
        return response()->json([
            'message' => 'deleted'
        ]);
    }

    public function uploadImage($id){
        $image = Category::base64UploadImage($id, request('image'));
        return response()->json([
            'image' => $image
        ]);
    }
}
