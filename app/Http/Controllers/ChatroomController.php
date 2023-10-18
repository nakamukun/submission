<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Message;
use App\Events\MessageSent;
use App\Models\Matching;
use App\Models\Chat_room;
use App\Models\Chat_message;

class ChatroomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function chatroom(Matching  $matching)
    {
        $chat_room = Chat_room::where('matching_id', $matching->id)->first();
        // dd($chat_room);
        $chat_messages = Chat_message::with('user')->where('chat_room_id', $chat_room->id)->get();
        
        return view("users/chatroom")->with([
              'chat_room' => $chat_room,
              'chat_messages' => $chat_messages,
            ]);
    }
    
    public function sendMessage(Request $request , Chat_room $chat_room)
    {
        $user = auth()->user();
        $strUsername = $user->name;
        
        $strMessage = $request->input('message');
        
        $message = new Message;
        $message->username = $strUsername;
        $message->body = $strMessage;
        MessageSent::dispatch($message);
        
        return view("users/chatroom")->with([
            'chat_room' => $chat_room,
            ]);
    }
    
  
}
