  <x-app-layout>
    <x-slot name="header">
      <h1>いいね</h1>
   </x-slot>
   
   
   
  
   
   
      
         @foreach($likedUserIds as $likedUserId)
        
              <p>
                <a href="/users/{{ $likedUserId->like->id }}" class="block">
                    @if($likedUserId->like->image_url)
                    <div>
                      <img src="{{ $likedUserId->like->image_url }}" alt="画像が読み込めません。" style="height:300px ;width:300px ;object-fit: cover;"/>
                    </div>
                    @endif
                  {{$likedUserId->like->name}}
                </a>
              </p>
          
         @endforeach
      
   
   
   <!--<div class="row">-->
   <!--  
   <!--</div>-->

  </x-app-layout>
  
  
