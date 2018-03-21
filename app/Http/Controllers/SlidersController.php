<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadGalleryRequest;
use App\Slider;
use Illuminate\Http\Request;
use File;

class SlidersController extends Controller
{
    public function index(){
        $images = Slider::orderBy('created_at', 'ASC')->get();

        return response()->json([
            'images' => $images
        ]);
    }

    public function store(UploadGalleryRequest $request){
        $image = Slider::saveImage(request('file'));
        return response()->json([
            'image' => $image
        ]);
    }

    public function destroy($id){
        $slider = Slider::find($id);
        File::delete($slider->file_path);
        File::delete($slider->file_path_mobile);
        File::delete($slider->file_path_small);

        $slider->delete();

        return response()->json([
            'message' => 'done'
        ]);
    }
}
