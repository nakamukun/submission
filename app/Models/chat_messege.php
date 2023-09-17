<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat_messege extends Model
{
    use HasFactory;
    public function chat_room()
    {
        return $this->belongsTo(Chat_room::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
