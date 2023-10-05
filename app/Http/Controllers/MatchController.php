<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Reaction;
use App\Models\Match;



class MatchController extends Controller
{
    public function match() 
    {
//   if(DB::table('reactions')->where('liked_id',\Auth::user()->id)->where('like_id','status' , true)->doesntExist());
    // {
    

      $likedUserIds = reaction::where('liked_id', \Auth::user()->id)->where('status' , true)->get();
    // }
    // $likedUsers = Reaction::where('to_user_id', \Auth::user()->id)->where('status' , true)->pluck('from_user_id');
    // $likedUsersInfo = $likedUsers->user()->get();
    
    //  $matchdUsers = reaction::where('fwrom_user_id', \Auth::user()->id)->whereIn('to_user_id', $likedUserIds)->where('status',true)->get();
    //  $followusers = reaction::where('to_user_id', \Auth::user()->id)->whereIn('likedUsers')->get();
    
    //  dd($likedUserIds);
        return view('users/match')->with([
            "likedUserIds" => $likedUserIds,
            //  'matchdUsers' => $matchdUsers,
            // 'user' => $user,
            // "followusers" =>  $followusers,
            ]);
        
    }
    
    public function removeMatchUser()
    {
        DB::table('reaction')->where('liked_id',$likedUserIds)->delete();
    }
    
    
}
