 <x-app-layout>
    <x-slot name="header">
     
      <h1>トーク</h1>
   </x-slot>
   
         @foreach($matchdUsers as $matchdUser)
          <p>
            <a href='/chatroom' class="block">
                <div class="container" style="border:1px solid black;margin-bottom:0.2px;">
                    <div>
                        <img src="{{ $matchdUser->liked->image_url }}" alt="画像が読み込めません。"  style="height:50px ;width:50px ;object-fit: cover;"/>
                    </div>
                    <div style="font-size:15px;">
                        {{$matchdUser->liked->name}}
                    </div>
                </div>
            </a>
          </p>
         @endforeach
   
  </x-app-layout>