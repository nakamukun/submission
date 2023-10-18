<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat_message extends Model
{
    use HasFactory;
    
     protected $table = 'chat_messages';
    
       protected $fillable = [
         'message', 'chat_room_id','sender_id',
        ];
    public function chat_room()
    {
        return $this->belongsTo(Chat_room::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
