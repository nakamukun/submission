 <x-app-layout>
    <x-slot name="header">
     
      <h1>詳細画面</h1>
   </x-slot>
   
     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                 
    <body>
     
       @if($user->image_url)
            <div>
                <img src="{{ $user->image_url }}" alt="画像が読み込めません。"style="height:300px ;width:300px ;object-fit: cover;"/>
            </div>
        @endif

           <div>
            <p>名前:{{$user->name}}</p>
            <p>年齢:{{$user->age}}</p>
            <p>居住地:{{$user->location}}</p>
            <p>身長:{{$user->height}}</p>
            <p>自己紹介文:{{$user->bio}}</p>
            <p>趣味:{{$user->hobby}}</p>
            <p></p>
         
         </div>
         <form action="{{route('reactions/store')}}" method="POST">
         @csrf
         <input type="hidden" name="to_user_id" value="{{ $user->id}}">
         <input type="hidden" name="status" value="1">
         <button class="yes" type="submit">
            　いいね
         </button>
         </form>
         
      
            
     

      
      
      
       </div>
            </div>
        </div>
    </div>      
  </x-app-layout>