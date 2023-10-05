<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chatroom;

class ChatRoomController extends Controller
{
    public function chatroom()
    {
      return view('users/chatroom');
    }
}
