<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    public function scores()
    {
        return $this->hasMany('App\Score');
    }
    
    public function comments()    
    {
        return $this->hasMany('App\Comment');
    }
    
    public function score()
    {
        $note = 0;
        foreach($this->scores as $score)
        {
            $note += $score->note;
        }
        
        return $note;
    }
}
