<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name'=> 'required',
            'email'=> 'required|email',
            'username'=>'required',
            'password'=>'required|confirmed'
        ]);

        if($request->hasFile('image')){
            $this->validate($request, [
                'image'=>'file|image|max:5000'
            ]);
        }

        $userModel = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>Hash::make($request->password)
        ]);

        if($request->has('image')){
            $userModel->update([
                'image'=>$request->image->store('userImage','public')
            ]);
        }

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('dashboard');
    }
}
