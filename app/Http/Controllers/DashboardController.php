<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $userPosts = Post::get()->where('user_id', auth()->user()->id);
        return view('dashboard',[
            'userPosts'=>$userPosts
        ]);
    }
}
