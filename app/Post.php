<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];

    public function comments(){
        //Comment::class = 'App\Comment'
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){
        //create(compact('body'));
        $this->comments()->create(['body' => $body]);
        // Comment::create([
            //'body' => $body,
            //'post_id' => $this->id
        // ]);
    }
}
