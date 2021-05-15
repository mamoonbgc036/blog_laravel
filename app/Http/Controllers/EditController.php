<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function index($post){
       $postData = Post::find($post);
       return view('posts.post', [
           'posts'=>$postData
       ]);
    }

    public function store(Request $request){
        dd($request);
    }
}
