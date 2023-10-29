    <head>
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h1 class="header">さがす</h1>
        </x-slot>
        <body>
            <div class="body">
                <a href="/search" class="search">
                    <div class="search">
                         <h2 class="fa fa-magnifying-glass"></h2>
                         <input type="submit" value="検索条件を設定する">
                    </div>                                                     
                </a>
                @foreach($users as $user)
                    <p>
                        <div class="inf">
                            <a href="/users/{{ $user->id }}">
                                @if($user->image_url)
                                    <div class="image">
                                        <img src="{{ $user->image_url }}"  class="image" alt="画像が読み込めません。">
                                    </div>
                                @endif
                                <div class="user">
                                    <h1>{{$user->name}}</h1>
                                    <p>{{$user->age}}</p>
                                    <p>{{$user->college}}</p>
                                </div>
                             </a>                           
                        </div>    
                    </p>
                @endforeach
            </div>    
        </body>
    </x-app-layout>
