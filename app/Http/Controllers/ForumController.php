<?php

namespace App\Http\Controllers;

use App\Forum;
use App\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //

    public function index(){
        $forums=Forum::latest()->paginate(10);

        return view('forums.index',compact('forums'));
    }

    public function show(Forum $forum){
        $posts=$forum->posts()->with(['user'])->paginate(2);
        dd($posts);



    }


}
