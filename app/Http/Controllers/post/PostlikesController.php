<?php

namespace App\Http\Controllers\post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostlikesController extends Controller
{
    public function store(Post $post,Request $request){
        $post->like()->create([
            'user_id'=> $request->user()->id,
        ]);

        return back();
    }
}
