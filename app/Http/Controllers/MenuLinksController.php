<?php

namespace App\Http\Controllers;

use App\Menu;
use App\MenuLink;
use Illuminate\Http\Request;

class MenuLinksController extends Controller
{
    public function show($id){
        request('locale')? $locale = request('locale') : $locale = 'en';
        app()->setLocale($locale);
        $link = MenuLink::find($id);

        return response()->json([
            'link' => $link
        ]);
    }

    public function update(Request $request, $id){

    }

    public function sort($id){
        $menu = Menu::find($id);
        $links = $menu->menuLinks;
        $last = MenuLink::orderBy('id', 'DESC')->first();
        if(empty($last)){
            $id = 1;
        }else{
            $id = $last->id + 1;
        }

        return response()->json([
            'menu' => $menu,
            'links' => $links,
            'lastId' => $id
        ]);
    }
}
