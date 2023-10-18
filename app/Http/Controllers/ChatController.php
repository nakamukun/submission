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
    //  $likedUserIds = reaction::where('liked_id', Auth::user()->id)->where('status' , 2)->pluck('like_id');
    // //  dd($likedUserIds);
    //  $matchdUsers = reaction::where('like_id', \Auth::user()->id)->whereIn('liked_id', $likedUserIds)->where('status',2)->get();
     
    $matchings = Matching::where('match1_id', $userId)
    ->orWhere('match2_id', $userId)
    ->get();
     
    //  dd($matchdUsers);
        return view('users/chat')->with([
          'matchings' => $matchings,
            ]);
    }
    
  
}

