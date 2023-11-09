    <head>
        <link rel="stylesheet" href="{{asset('css/chat.css')}}">
    </head>
    <x-app-layout>
        <x-slot name="header">
                <h1 class="header">トーク</h1>
                <ul class="sakura" >
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
        </x-slot>
       
        <body>
            <div class="body">
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            @foreach($matchings as $matching)
                                <div class="inf">
                                   
                                    @if ($matching->match1_id == Auth::id())
                                        <img src="{{ $matching->match2->image_url }}" alt="画像が読み込めません。" class="image"/>
                                            <div class="user">
                                                <p>{{$matching->match2->name}}</p>
                                                <p>{{$matching->match2->location}}</p>
                                            </div>
                                    @else
                                        <img src="{{ $matching->match1->image_url }}" alt="画像が読み込めません。" class="image"/>
                                            <div class="user">
                                                <p>{{$matching->match1->name}}</p>
                                                <p>{{$matching->match1->location}}</p>
                                            </div>
                                    @endif
                                        <h3 class="btn"><a href='/chatroom/{{$matching->id}}'>チャットを始めよう！</a></h3>
                                </div>
                            @endforeach
                    </div>
                </div>      
            </div>    
        </body>    
    </x-app-layout>