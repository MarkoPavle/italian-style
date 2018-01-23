<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateThemeRequest;
use App\Theme;
use Illuminate\Http\Request;

class ThemesController extends Controller
{
    public function store(CreateThemeRequest $request)
    {
        $theme = Theme::create($request->all());
        $theme->slug = str_slug($request->input('title'));
        request('publish')? $theme->publish = true : $theme->publish = false;
        request('active')? $theme->active = true : $theme->active = false;
        $theme->update();

        return response()->json([
            'message' => 'done'
        ]);
    }

    public function update(CreateThemeRequest $request, Theme $theme)
    {
        $theme->title = request('title');
        $theme->slug = str_slug(request('title'));
        $theme->version = request('version');
        $theme->author = request('author');
        $theme->author_address = request('author_address');
        $theme->author_email = request('author_email');
        $theme->developer = request('developer');

        if(request('image')){
            self::base64UploadImage($theme, request('image'));
        }
        $theme->update();

        return response()->json([
            'message' => 'done'
        ]);
    }
}
