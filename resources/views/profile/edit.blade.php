 <head>
        <link rel="stylesheet" href="{{asset('css/edit.css')}}">
    </head>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            <p class="header">{{ __('マイページ') }}</p>
        </h2>
    </x-slot>

    <div class="home py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="max-w-xl">
                @include('profile.partials.update-profile-information-form')
            </div>
                
            <div class="user">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
    
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>    
        </div>
    </div>
</x-app-layout>
