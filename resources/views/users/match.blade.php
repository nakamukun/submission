  <x-app-layout>
    <x-slot name="header">
      <h1>いいね</h1>
   </x-slot>
   
         @foreach($matchdUsers as $matchdUser)
          <p>
            <a href="#" class="block" styel>
                <div>
                    <img src="{{ $matchdUser->touser->image_url }}" alt="画像が読み込めません。" style="height:300px ;width:300px ;object-fit: cover;"/>
                </div>
              {{$matchdUser->touser->name}}
            </a>
          </p>
         @endforeach
   
   
   
   <!--<div class="row">-->
   <!--  
   <!--</div>-->

  </x-app-layout>
  
  
