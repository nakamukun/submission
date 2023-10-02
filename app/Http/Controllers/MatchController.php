<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Reaction;


class MatchController extends Controller
{
    public function match()
    {
     
  
     $likedUserIds = reaction::where('to_user_id', \Auth::user()->id)->where('status' , true)->pluck('from_user_id');
      
     $matchdUsers = reaction::where('from_user_id', \Auth::user()->id)->whereIn('to_user_id', $likedUserIds)->where('status',true)->get();
     
     
    //  dd($matchdUsers);
        return view('users/match')->with([
            'matchdUsers' => $matchdUsers,
          
            
            ]);
            
            
    
        
    
    }
}
