<section>
    <header>
        <h2 class="user text-lg font-medium text-gray-900">
            {{ __('プロフィール情報') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __() }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6",  enctype="multipart/form-data">
        @csrf
        @method('patch')
 
　　
        <div>
            <x-picture-input />
            <x-input-error class="mt-2" :messages="$errors->get('picture')" />
        </div>
        
        <div class="user">
            <div class="btn">
                <x-input-label for="name" :value="__('名前')" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
          
            <div class="btn">
                <x-input-label for="email" :value="__('メールアドレス')" />
                <x-text-input id="email" name="post[email]" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />
    
                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Your email address is unverified.') }}
    
                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>
    
                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
            
            <div class="btn">
                <x-input-label for="age" :value="__('年齢')" />
                <x-text-input id="age" name="age" type="text" class="mt-1 block w-full" :value="old('age', $user->age)" autocomplete="age" />
                <x-input-error class="mt-2" :messages="$errors->get('age')" />
            </div>
            
             <div class="btn">
                <x-input-label for="sex" :value="__('性別')" />
                <x-text-input id="sex" name="sex" type="text" class="mt-1 block w-full" :value="old('sex', $user->sex)" autocomplete="sex" />
                <x-input-error class="mt-2" :messages="$errors->get('sex')" />
            </div>
            
              <div class="btn">
                <x-input-label for="bio" :value="__('自己紹介文')" />
                <x-text-input id="bio" name="bio" type="text" class="mt-1 block w-full" :value="old('bio', $user->bio)" autocomplete="bio" />
                <x-input-error class="mt-2" :messages="$errors->get('bio')" />
            </div>
            
            <div class="btn">
                <x-input-label for="hobby" :value="__('趣味')" />
                <x-text-input id="hobby" name="hobby" type="text" class="mt-1 block w-full" :value="old('hobby', $user->hobby)" autocomplete="hobby" />
                <x-input-error class="mt-2" :messages="$errors->get('hobby')" />
            </div>
            
            <div class="btn">
                <x-input-label for="height" :value="__('身長')" />
                <x-text-input id="height" name="height" type="text" class="mt-1 block w-full" :value="old('height', $user->height)" autocomplete="height" />
                <x-input-error class="mt-2" :messages="$errors->get('height')" />
            </div>
           
            <div class="btn">
                <x-input-label for="location" :value="__('居住地')" />
                <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" :value="old('location', $user->location)" autocomplete="location" />
                <x-input-error class="mt-2" :messages="$errors->get('location')" />
            </div>
            
            <div class="btn">
                <x-input-label for="college" :value="__('大学')" />
                <x-text-input id="college" name="college" type="text" class="mt-1 block w-full" :value="old('college', $user->college)" autocomplete="college" />
                <x-input-error class="mt-2" :messages="$errors->get('college')" />
            </div>
            
            <div class="btn">
                <x-input-label for="factory" :value="__('学部')" />
                <x-text-input id="factory" name="factory" type="text" class="mt-1 block w-full" :value="old('factory', $user->factory)" autocomplete="factory" />
                <x-input-error class="mt-2" :messages="$errors->get('factory')" />
            </div>
            
             <div class="btn"> 
                <x-input-label for="department" :value="__('学科')" />
                <x-text-input id="department" name="department" type="text" class="mt-1 block w-full" :value="old('department', $user->department)" autocomplete="department" />
                <x-input-error class="mt-2" :messages="$errors->get('department')" />
            </div>
        </div>
        
       

        <div class="flex items-center gap-4">
            <x-primary-button class="ok" type="submit">{{ __('決定') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
