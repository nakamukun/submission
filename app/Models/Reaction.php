<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use App\Models\User;


class Reaction extends Pivot
{
     protected $fillable =[
       'like_id',
       'liked_id',
       'status',
       ];

    protected $table = 'reactions';
    
    public function liked()
    {
        return $this->belongsTo('App\Models\User', 'liked_id','id');
    }
    
    public function like()
    {
        return $this->belongsTo('App\Models\User', 'like_id','id');
    }

}
