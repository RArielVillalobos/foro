<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //
    protected $table='replies';
    protected $fillable=[
        'user_id','´post_id','reply'
    ];

    protected $appends=['forum'];

    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getForumAttribute(){
        return $this->post->forum;
    }
}
