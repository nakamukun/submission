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
                <p>
                    <div class="inf"> 
                        <a href="/users/{{ $likedUserId->like->id }}" class="block">
                            @if($likedUserId->like->image_url)
                            <div class="image">
                              <img src="{{ $likedUserId->like->image_url }}" alt="画像が読み込めません。" style="height:300px ;width:300px ;object-fit: cover;"/>
                            </div>
                            @endif
                            <div class="user">
                              <h1>{{$likedUserId->like->name}}</h1>
                              <p>{{$likedUserId->like->age}}</p>
                              <p>{{$likedUserId->like->college}}</p>
                            </div>
                        </a>
                    </div>
                </p>
            @endforeach
        </div>
    </body> 
    </x-app-layout>
  
  
