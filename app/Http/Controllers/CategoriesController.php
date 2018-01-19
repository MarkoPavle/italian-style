<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::select('id', 'title', 'publish', 'created_at')->orderBy('created_at', 'DESC')->paginate(3);
        $columns = ['id', 'title', 'publish', 'created at'];
        return response()->json([
            'categories' => $categories,
            'columns' => $columns
        ]);
    }

    public function store(CreateCategoryRequest $request){
        $category = Category::create($request->all());
        return response()->json([
            'category' => $category
        ]);
    }
}
