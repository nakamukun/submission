<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    
     protected $fillable =[
       'to_user_id',
       'from_user_id',
       'status',
        
        ];
        
        public function toUser()
        {
          return $this->belongsTo('App\Models\User','to_user_id','id');
        }
}
