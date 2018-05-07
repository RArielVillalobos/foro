<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    //

    public function show(Post $post){
        $replies=$post->replies()->with('user')->paginate(2);
        return view('posts.details',compact('post','replies'));

    }

    public function store(PostRequest $postRequest){

            $post=new Post();
            $post->title=request()->input('title');
            $post->description=request()->input('title');
            $post->forum_id=request()->input('forum_id');
            $post->user_id=request()->input('user_id');
            $post->save();

            return back();
    }


}
