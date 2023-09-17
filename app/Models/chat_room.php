<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat_rooms extends Model
{
    use HasFactory;
    
    public function chat_messege()
    {
        return $this->HasMany(Chat_messege::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
