<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::select('categories.id as id', 'category_translations.title as title', 'categories.publish as publish', 'categories.created_at as created_at')
            ->join('category_translations', 'categories.id', '=', 'category_translations.category_id')
            ->orderBy('categories.created_at', 'DESC')->groupBy('categories.id')->paginate(3);
        $columns = ['id', 'title', 'publish', 'created at'];
        return response()->json([
            'categories' => $categories,
            'columns' => $columns
        ]);
    }

    public function store(CreateCategoryRequest $request){
        app()->setLocale('en');
        $category = new Category();
        $category->title = request('title');
        $category->slug = str_slug(request('title'));
        $category->desc = request('desc');
        $category->order = 1;
        request('publish')? $category->publish = true : $category->publish = false;
        $category->save();

        return response()->json([
            'category' => $category
        ]);
    }
}
