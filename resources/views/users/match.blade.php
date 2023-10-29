    <head>
        <link rel="stylesheet" href="{{asset('css/match.css')}}">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h1 class="header">いいね</h1>
        </x-slot>
        <body> 
            <div class="body">
                <p class="matching">相手からのいいね！</p>
                @foreach($likedUserIds as $likedUserId)
                    <div class="inf"> 
                        <a href="/users/{{ $likedUserId->like->id }}" class="block">
                            @if($likedUserId->like->image_url)
                                  <img src="{{ $likedUserId->like->image_url }}" alt="画像が読み込めません。" class="image"/>
                            @endif
                            <div class="user">
                              <h1>{{$likedUserId->like->name}}</h1>
                              <p>{{$likedUserId->like->age}}</p>
                              <p>{{$likedUserId->like->college}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </body> 
    </x-app-layout>
  
  
