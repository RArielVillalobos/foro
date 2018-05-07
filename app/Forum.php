<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    //
    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function replies(){
        return $this->hasManyThrough(Reply::class,Post::class);
    }

}
