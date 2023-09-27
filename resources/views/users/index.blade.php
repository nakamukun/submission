
  <x-app-layout>
    <x-slot name="header">
      <h1>探す</h1>
   </x-slot>
    <body>
            <h1>ようこそ</h1>
            
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
        
        <a href="{{ route('users/show' , ['user_id' => $user->id]) }}" class="block">
         {{$user->college}}
         
         </a>
        
         @endforeach
      
      
        
        
     
    </body>
  </x-app-layout>
