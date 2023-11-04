<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reaction;
use App\Models\Matching;
use App\Models\Chat_room;

class ChatController extends Controller
{
    public function chat(User $user,Chat_room $chat_room)
    {
        $userId = \Auth::id();
         
        $matchings = Matching::where('match1_id', $userId)
        ->orWhere('match2_id', $userId)
        ->get();
      
        return view('users/chat')->with([
          'matchings' => $matchings,
            ]);
    }
    
  
}

