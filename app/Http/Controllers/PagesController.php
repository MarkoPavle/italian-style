<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Theme;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $settings = Setting::first();
        $theme = Theme::where('active', 1)->first();
        return view('themes.'.$theme->slug.'.index', compact('settings', 'theme'));
    }
}
