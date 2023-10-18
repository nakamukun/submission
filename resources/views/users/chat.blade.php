 <x-app-layout>
    <x-slot name="header">
     
      <h1>トーク</h1>
   </x-slot>
   
         @foreach($matchings as $matching)
          <p>
            <a href='/chatroom/{{$matching->id}}' class="block">
            <!--<a href='/users/chatroom' class="block">-->
                <div class="container" style="border:1px solid black;margin-bottom:0.2px;">
                    @if ($matching->match1_id == Auth::id())
                        <p>マッチング相手の名前: {{ $matching->match2->name }}</p>
                            <div>
                                <img src="{{ $matching->match2->image_url }}" alt="画像が読み込めません。"  style="height:50px ;width:50px ;object-fit: cover;"/>
                            </div>
                            <div style="font-size:15px;">
                                {{$matching->match2->name}}
                            </div>
                    @else
                        <p>マッチング相手の名前: {{ $matching->match1->name }}</p>
                         <div>
                            <img src="{{ $matching->match1->image_url }}" alt="画像が読み込めません。"  style="height:50px ;width:50px ;object-fit: cover;"/>
                        </div>
                        <div style="font-size:15px;">
                            {{$matching->match1->name}}
                        </div>
                    @endif
                </div>
            </a>
          </p>
         @endforeach
   
  </x-app-layout>