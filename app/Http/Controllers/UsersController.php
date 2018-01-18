<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\UploadUserImageRequest;
use App\User;
use Illuminate\Http\Request;
use File;

class UsersController extends Controller
{
    public function index(){
        $users = User::select('id', 'name', 'email', 'role_id', 'created_at')->orderBy('created_at', 'DESC')->paginate(3);
        $columns = ['id', 'ime', 'email', 'pravo pristupa', 'kreirano'];
        return response()->json([
            'users' => $users,
            'columns' => $columns
        ]);
    }

    public function store(CreateUserRequest $request){
        $user = User::create($request->except('password', 'image'));
        if(request('password')){
            $user->password = bcrypt(request('password'));
            $user->update();
        }
        if(request('image')){
            User::base64UploadImage($user->id, request('image'));
        }
        return response()->json([
            'user' => $user
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

    public function destroy($id){
        $user = User::find($id);
        if(!empty($user->image)) File::delete($user->image);
        User::destroy($user->id);
        return response()->json([
            'message' => 'deleted'
        ]);
    }

    public function uploadImage(Request $request, $id){
        $image = User::base64UploadImage($id, request('image'));
        return response()->json([
            'image' => $image
        ]);
    }
}
