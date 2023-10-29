    <head>
        <link rel="stylesheet" href="{{asset('css/show.css')}}">
    </head>
    <x-app-layout>
        <x-slot name="header">
         
          <h1 class="header">詳細画面</h1>
        </x-slot>
        <body>
             <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            @if($user->image_url)
                                <div class = "image">
                                    <img src="{{ $user->image_url }}" alt="画像が読み込めません。"class="image"/>
                                </div>
                            @endif
                            
                            <div class="basic">基本情報</div>
                            
                            <div class="user">
                                名前<p>{{$user->name}}</p>
                                年齢<p>{{$user->age}}</p>
                                居住地<p>{{$user->location}}</p>
                                身長<p>{{$user->height}}</p>
                                自己紹介文<p>{{$user->bio}}</p>
                                趣味<p>{{$user->hobby}}</p>
                            </div>
                            
                            <form action="{{route('reactions/store')}}" method="POST">
                            @csrf
                                <input type="hidden" name="liked_id" value="{{ $user->id}}">
                                <input type="hidden" name="status" value="1">
                                <div class="btn">
                                    <button class="yes" type="submit">
                                            <span class="fa fa-heart" class="good"></span>いいね!
                                    </button>
                                    
                                </div>
                            </form>
                            <p class="back">
                                <a href='/' >戻る</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>      
        </body>    
    </x-app-layout>
  