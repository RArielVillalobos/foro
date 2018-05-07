<?php

namespace App\Http\Controllers;

use App\Forum;
use App\Post;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //

    public function index(){
        $forums=Forum::with(['posts','replies'])->paginate(2);

        return view('forums.index',compact('forums'));
    }

    public function show(Forum $forum){
        $posts=$forum->posts()->with(['user'])->paginate(2);

        return view('forums.detail',compact('forum','posts'));
    }

    public function store(){

        $this->validate(request(),[
            'nombre'=>'required|max:100|unique:forums',
        ]);

        $forum=new Forum();
        $forum->name=request()->input('nombre');
        $forum->description=request()->input('descripcion');
        $forum->save();
        return back()->with(['message'=>'Foro Creado Correctamente','estado'=>'success']);

    }



}
