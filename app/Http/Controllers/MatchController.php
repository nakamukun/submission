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
        $likedUserIds = reaction::where('liked_id', \Auth::user()->id)->where('status' , true)->get();
        return view('users/match')->with([
            "likedUserIds" => $likedUserIds,
        ]);
        
    }
    
    public function removeMatchUser()
    {
        DB::table('reaction')->where('liked_id',$likedUserIds)->delete();
    }
    
    
}
