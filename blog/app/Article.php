<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Define the relationship between articles and comments

    public function comments() {

    	return $this -> hasMany(Comment::class);

    }

    public function addComment(Comment $comment) {


    	return $this->comments()->save($comment);


    }

    public function path() {

    	return $this->id;

    }

    public function user() {

        return $this->belongsTo(User::class);

    }

    public function likes() {


        return $this->hasMany(Like::class);
        
    }

}
