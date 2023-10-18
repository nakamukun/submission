<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Reaction;
use App\Models\Matching;
use App\Models\Chat_room;
use App\Models\Chat_message;
use Datetime;


class ReactionController extends Controller
{
    public function store(Request $request , Reaction $reaction)
    {
        if (DB::table('reactions')->where('like_id',$request->input('liked_id'))->where('liked_id', \Auth::user()->id)->exists())
        //AさんがB(自分)さんにいいねを送っている時
        {   
            $item = DB::table('reactions')->where('like_id',$request->input('liked_id'))->where('liked_id', \Auth::user()->id)->update([
                'status' => 2
                ]);
                
            reaction::create([
                'like_id' => \Auth::user()->id,
                'liked_id' => $request->input('liked_id'),
                'status' => 2,
            ]);
            
            
            $matching = matching::create([
                'match1_id' => \Auth::user()->id,
                'match2_id' => $request->input('liked_id'),
                ]);
                
            $chat_room = chat_room::create([
                'matching_id' => $matching->id,
                'created_at' => new Datetime(),
                ]);
                
            
            
            
        } elseif (DB::table('reactions')->where('like_id', Auth::user()->id)->where('liked_id',$request->input('liked_id'))->doesntExist())
        //自分(Aさん)がBさんにいいねを送ってない時
        {
            reaction::create([
                'like_id' => \Auth::user()->id,
                'liked_id' => $request->input('liked_id'),
                'status' => 1,
            ]);
        }
    
          return redirect(route('users/index'));
       
    }
}
