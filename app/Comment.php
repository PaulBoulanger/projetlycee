<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'post_id', 'content', 'date',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function getCreatedAtAttribute($date)
    {
        return 'Il y a ' . Carbon::parse($date)->diffForHumans(Carbon::now(), true) . '.';
    }
}
