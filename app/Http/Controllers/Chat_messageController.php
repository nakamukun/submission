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
    //   dd($request);
        // $chat_message = chat_message::create([
        //     'chat_room_id' => $chat_room->id,
        //     'sender_id' => \Auth::user()->id,
        //     'message' => $request['chat_message'],
        // ]);  
        
    //   var_dump($chat_room->id);
        // $input = $request['chat_message'];
        // // dd($chat_room);
        // $input['chat_room_id'] = $chat_room->id; 
        // dd($input);
        // $input['sender_id'] = \Auth::user()->id;
        // $chat_message->fill($input)->save();
          $user = auth()->user();
        $strUsername = $user->name;
        
        $strMessage =  $request['message'];
        
        $message = new Message;
        $message->username = $strUsername;
        $message->body = $strMessage;
        // dd($message,$request);
        MessageSent::dispatch($message);
        //   dd($message,$request);
        $chat_message->message = $request['message'];
        $chat_message->chat_room_id = $chat_room->id;
        $chat_message->user_id =  \Auth::user()->id;
        $chat_message->save();
        //   dd($message,$request);
        // dd($chat_message);
        // return redirect('/chatroom/'. $chat_message->chat_room->matching->id)->with([
        //     "chat_room_id" => $chat_message->chat_room_id,
        // ]);
        return $request;
        
        //  chat_message::create([
        //       'message' => strMessage,
        //         ]);
    }
}
