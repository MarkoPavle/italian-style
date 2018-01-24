<?php

namespace App\Http\Controllers;

use App\Menu;
use App\MenuLink;
use Illuminate\Http\Request;

class MenuLinksController extends Controller
{
    public function show($id){
        $menu = Menu::find($id);
        $links = $menu->menuLinks;
        $last = MenuLink::orderBy('id', 'DESC')->first();

        return response()->json([
            'menu' => $menu,
            'links' => $links,
            'lastId' => $last->id + 1
        ]);
    }

    public function update(Request $request, $id){

    }
}
