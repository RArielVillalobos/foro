<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function forum(){
        return $this->belongsTo(Forum::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
