    <head>
        <link rel="stylesheet" href="{{asset('css/chatroom.css')}}">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h1 class="header">チャットルーム</h1>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        @foreach($chat_messages as $chat_message)
                            <div>
                                <p>
                                   
                                    <div class="user">
                                        <h1>{{ $chat_message->user->name}}</h1>
                                        <p>{{ $chat_message->message}}</p>
                                    </div>
                                </P>
                            </div>
                        @endforeach
                       
                        <ul id="list_message"></ul>
                        
                       <form method="post"id="chat_message"onsubmit="onsubmit_Form(); return false;">
                        @csrf
                            <input type="text" class="text" id="input_message" name="chat_message" autocomplete="off">
                            <input type="hidden" name="chat_room_id" value="{{$chat_room->id}}">
                            <button type="submit" class="text-white bg-blue-700 px-5 py-2">送信</button>
                        </form>
                        <a href="/chat" class="back">戻る</a>
                    </div>
                </div>
            </div>
        </div>
     
        <script>
           {{-- const elementInputNickname = document.getElementById( "input_nickname" );--}}
            const elementInputMessage = document.getElementById( "input_message" );
            
            var chatRoomId = <?php echo $chat_room->id; ?>;
                        console.log(elementInputMessage );
            
            function onsubmit_Form()
            {
                let strMessage = elementInputMessage.value;
    
                if( !strMessage )
                {
                    return;
                }
    
                params = {'message': strMessage };
    
                axios
                    .post( `/chat_messages/${chatRoomId}`, params )
                    .then( response => {
                        console.log(response);
                    } )
                    .catch(error => {
                        console.log(error.response)
                    } );
    
                elementInputMessage.value = "";
            }
            
            window.addEventListener( "DOMContentLoaded", function()
            
            {
                const elementListMessage = document.getElementById( "list_message" );
                 
                
                window.Echo.private('chatroom').listen( 'MessageSent', (e) =>
                {
                    console.log(e);
                    let strUsername = e.message.username;
                    let strMessage = e.message.body;
                    let elementLi = document.createElement( "li" );
                    let elementUsername = document.createElement( "strong" );
                    let elementMessage = document.createElement( "div" );
                    elementUsername.textContent = strUsername;
                    elementMessage.textContent = strMessage;
                    elementLi.appendChild( elementUsername );
                    elementLi.appendChild( elementMessage );
                    elementListMessage.prepend( elementLi ); 
                });
            });
            
        </script>
    </x-app-layout>