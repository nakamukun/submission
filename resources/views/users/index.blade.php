
    <x-app-layout>
        <x-slot name="header">
            
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
              
            </h1>
        </x-slot>
        <body>
            <form method="GET" action="{{ route('users/index') }}">
              
                <input type="search" placeholder="大学名" name="college" value="@if (isset($college)) {{$college}} @endif">
                <input type="search" placeholder="学部名" name="factory" value="@if (isset($factory)) {{$factory}} @endif">
                <input type="search" placeholder="学科名" name="department" value="@if (isset($department)) {{$department}} @endif">
                    <div>
                        <button type="submit">検索</button>
                        <button><a href="{{route('users/index')}}" class="text-white" style="color:red;">クリア</a></button>
                    </div>
            </form>
              
            @foreach($users as $user)
                
                <p>
                  <a href="/users/{{ $user->id }}" class="block">
                     @if($user->image_url)
                      <div>
                          <img src="{{ $user->image_url }}" alt="画像が読み込めません。" style="height:300px ;width:300px ;object-fit: cover;"/>
                      </div>
                     @endif
                     名前:{{$user->name}}
                   </a>
                </p>
            @endforeach
    
          
        </body>
    </x-app-layout>
