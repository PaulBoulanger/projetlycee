<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    

    protected $fillable = [
        'title', 'content', 'date', 'status', 'url_thumbnail', 'user_id',
    ];
    
    protected $dates = [
        'date',
    ];
    
   public function comments()
   {
       return $this->hasMany('App\Comment');
   }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function setDateAttribute($date)
    {
        $date = str_replace('/', '-', $date);
        $this->attributes['date'] = Carbon::parse($date)->format('Y-m-d H:i:s');
    }
    
    public function getDateAttribute($date)
    {
        return Carbon::parse($date)->format("d/m/Y");
    }
}
