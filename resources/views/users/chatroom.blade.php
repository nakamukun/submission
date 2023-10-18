<x-app-layout>
    <x-slot name="header">
     
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           チャットルーム
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form method="post"id="chat_message"onsubmit="onsubmit_Form(); return false;">
                    @csrf
                        <input type="text" id="input_message" name="chat_message" autocomplete="off">
                        <input type="hidden" name="chat_room_id" value="{{$chat_room->id}}">
                        <button type="submit" class="text-white bg-blue-700 px-5 py-2">送信</button>
                    </form>
                    
                   @foreach($chat_messages as $chat_message)
                        <div>
                            <p>
                                <!--<ul id="list_message"></ul>-->
                                <ul>
                                    {{ $chat_message->user->name}}
                                    {{ $chat_message->message}}
                                </ul>
                            </P>
                        </div>
                    @endforeach
                     <ul id="list_message"></ul>
                </div>
            </div>
        </div>
    </div>
     
    
     <script>
        const elementInputNickname = document.getElementById( "input_nickname" );
        const elementInputMessage = document.getElementById( "input_message" );
        
        var chatRoomId = <?php echo $chat_room->id; ?>;
                    console.log(elementInputMessage );
        {{-- formのsubmit処理 --}}
        function onsubmit_Form()
        {
            {{-- 送信用テキストHTML要素からメッセージ文字列の取得 --}}
            let strMessage = elementInputMessage.value;

            if( !strMessage )
            {
                return;
            }

            params = {'message': strMessage };

            {{-- POSTリクエスト送信処理とレスポンス取得処理 --}}
            axios
                .post( `/chat_messages/${chatRoomId}`, params )
                .then( response => {
                    console.log(response);
                } )
                .catch(error => {
                    console.log(error.response)
                } );

            {{-- テキストHTML要素の中身のクリア --}}
            elementInputMessage.value = "";
        }
        
        
           
        {{-- ページ読み込み後の処理 --}}
        window.addEventListener( "DOMContentLoaded", function()
        
        {
            const elementListMessage = document.getElementById( "list_message" );
            
            {{-- Listen開始と、イベント発生時の処理の定義 --}}
            window.Echo.private('chatroom').listen( 'MessageSent', (e) =>
            {
                console.log(e);
                {{-- メッセージの整形 --}}
                let strUsername = e.message.username;
                let strMessage = e.message.body;

                {{-- 拡散されたメッセージをメッセージリストに追加 --}}
                let elementLi = document.createElement( "li" );
                let elementUsername = document.createElement( "strong" );
                let elementMessage = document.createElement( "div" );
                elementUsername.textContent = strUsername;
                elementMessage.textContent = strMessage;
                elementLi.append( elementUsername );
                elementLi.append( elementMessage );
                elementListMessage.prepend( elementLi );  // リストの一番上に追加
                //elementListMessage.append( elementLi ); // リストの一番下に追加
            });
        });
        
    </script>
</x-app-layout>