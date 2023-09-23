<x-app-layout>
    <x-slot name="header">
      <h1>編集</h1>
   </x-slot>
    <body>
   
        <h2 class="title">
            <a href="/profile">
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>
            </a>
        </h2>
     
    </body>
  </x-app-layout>