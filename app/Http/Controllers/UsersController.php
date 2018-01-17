<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use App\Http\Requests\UploadUserImageRequest;
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

    public function show($id){
        $user = User::find($id);
        return response()->json([
            'user' => $user
        ]);
    }

    public function update(EditUserRequest $request, $id){
        $user = User::find($id);
        $user->update($request->except('password', 'image'));
        if(request('password')){
            $user->password = bcrypt(request('password'));
            $user->update();
        }
        return response()->json([
            'user' => $user
        ]);
    }

    public function uploadImage(UploadUserImageRequest $request, $id){
        $image = User::base64UploadImage($id, request('image'));
        return response()->json([
            'image' => $image
        ]);
    }
}
