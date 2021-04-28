<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        $data = tap(request()->validate([
            'name'=> 'required',
            'email' => 'required|email',
            'username'=> 'required',
            'password' => 'required|confirmed'
        ]), function(){
            if(request()->hasFile('image')){
                request()->validate([
                    'image' => 'file|image|max:5000'
                ]);
            }
        });
        
        $userModel = User::create($data);
        if(request()->has('image')){
            $userModel->update([
                'image' => request()->image->store('userImage','public')
            ]);
        }
    }
}
