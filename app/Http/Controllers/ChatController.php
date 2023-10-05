<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ChatroomController;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;
use App\Models\User;
use App\Models\Reaction;

class ChatController extends Controller
{
    public function chat(User $user)
    {
    
     $likedUserIds = reaction::where('liked_id', Auth::user()->id)->where('status' , 2)->pluck('like_id');
    //  dd($likedUserIds);
     $matchdUsers = reaction::where('like_id', \Auth::user()->id)->whereIn('liked_id', $likedUserIds)->where('status',2)->get();
     
     
    //  dd($matchdUsers);
        return view('users/chat')->with([
            'matchdUsers' => $matchdUsers,
          
            
            ]);
    }
    
  
}

