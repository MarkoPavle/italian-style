<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::orderBy('created_at', 'DESC')->paginate(50);
        return response()->json([
            'users' => $users
        ]);
    }
}
