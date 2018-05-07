<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    //

    public function store(){

        $reply=new Reply();
        $reply->post_id=request()->input('post_id');
        $reply->user_id=request()->input('user_id');
        $reply->reply=request()->input('reply');
        $reply->save();

        return back()->with(['message'=>'Respuesta Añadida','estado'=>'success']);


    }
}
