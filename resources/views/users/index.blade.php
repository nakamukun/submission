
  <x-app-layout>
    <x-slot name="header">
            <h1>マッチングアプリ</h1>
            </x-slot>
    <body>
            <h1>ようこそ</h1>
            
      <form method="GET" action="{{ route('users/index') }}">
          
          <input type="search" placeholder="大学名" name="search" value="@if (isset($search)) {{$search}} @endif">

          <div>
              <button type="submit">検索</button>
              <button>
                  <a href="{{route('users/index')}}" class="text-white">
                      クリア
                  </a>
              </button>
          </div>
      </form>
      
      @foreach($users as $user)
        <a href="{{ route('users/show' , ['user_id' => $user->id]) }}">
         {{$user->college}}
         </a>
         @endforeach
         
        
      </x-app-layout>
    </body>
