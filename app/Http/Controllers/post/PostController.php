<?php

namespace App\Http\Controllers\post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('single');
    }
    public function index(){
        return view('posts.post');
    }

    public function store(Request $request){
        $data = $this->validate($request, [
            'Heading'=>'required',
            'body'=>'required'
        ]);

        if($request->hasFile('image')){
            $this->validate($request, [
                'image'=>'file|image|max:5000'
            ]);
        }

        $postData = Post::create([
            'Heading'=>$request->Heading,
            'body'=>$request->body,
            'user_id'=>auth()->user()->id
        ]);

        if($request->has('image')){
            $postData->update([
                'image' => $request->image->store('postImage', 'public')
            ]);
        }

        return redirect()->route('dashboard');
    }

    public function single(Post $post){
        return view('posts.single', [
            'post'=>$post
        ]);
    }
}
