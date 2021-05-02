<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $allPosts = Post::latest()->get();
        //dd($allPosts[4]->like->count());
        return view('posts.index',[
            'allPosts'=>$allPosts
        ]);
    }
}
