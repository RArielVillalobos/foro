<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //

    public function show(Post $post){
        $replies=$post->replies()->with('user')->paginate(2);
        return view('posts.details',compact('post','replies'));

    }


}
