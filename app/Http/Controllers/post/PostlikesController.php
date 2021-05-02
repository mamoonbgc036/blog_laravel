<?php

namespace App\Http\Controllers\post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostlikesController extends Controller
{
    public function store(Post $post,Request $request){
        
        if($post->likedBy($request->user())){
            return response(null, 409);
        }
        $post->like()->create([
            'user_id'=> $request->user()->id,
        ]);

        return back();
    }
}
