<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    //

    public function index(){
        $forums=Forum::latest()->paginate(10);

        return view('forums.index',compact('forums'));
    }


}
