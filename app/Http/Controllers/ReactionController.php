<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Reaction;


class ReactionController extends Controller
{
    public function store(Request $request)
    {
     if (DB::table('reactions')->where('from_user_id', Auth::user()->id)->where('to_user_id',$request->input('to_user_id'))->doesntExist())
     {
      reaction::create([
          'from_user_id' => Auth::user()->id,
          'to_user_id'   => $request->input('to_user_id'),
          'status'       => $request->input('status'),
      ]);
     }

          return redirect(route('users/index'));
       
    }
}
