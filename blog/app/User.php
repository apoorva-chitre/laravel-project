<?php

namespace App;

use Illuminate\Foundation\Auth\User;

use Illuminate\Database\Eloquent\Model;

class User extends User {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles() {


        return $this->hasMany(Article::class);
    }

    public function likes() {


        return $this->hasMany(Like::class);
        
    }

}
