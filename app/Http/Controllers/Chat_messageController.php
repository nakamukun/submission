<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reaction;
use App\Models\Chat_message;
use App\Models\Chat_room;
use App\Library\Message;
use App\Events\MessageSent;

class Chat_messageController extends Controller
{
      public function store(Request $request, Chat_message $chat_message, Chat_room $chat_room)
    {
          $user = auth()->user();
        $strUsername = $user->name;
        
        $strMessage =  $request['message'];
        
        $message = new Message;
        $message->username = $strUsername;
        $message->body = $strMessage;
        
        MessageSent::dispatch($message);

        $chat_message->message = $request['message'];
        $chat_message->chat_room_id = $chat_room->id;
        $chat_message->user_id =  \Auth::user()->id;
        $chat_message->save();
     
        return $request;
        
    }
}
