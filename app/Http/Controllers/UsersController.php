<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users = User::select('id', 'name', 'email', 'role_id', 'created_at')->orderBy('created_at', 'DESC')->paginate(50);
        $columns = ['id', 'ime', 'email', 'pravo pristupa', 'kreirano'];
        return response()->json([
            'users' => $users,
            'columns' => $columns
        ]);
    }
}
