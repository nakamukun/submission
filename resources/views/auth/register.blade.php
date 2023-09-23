<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('名前')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('メールアドレス')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        
        <div>
            <x-input-label for="college" :value="__('大学名')" />
            <x-text-input id="college" class="block mt-1 w-full" type="text" name="college" :value="old('college')" autocomplete="college" />
            <x-input-error :messages="$errors->get('college')" class="mt-2" />
        </div>
        
          <div>
            <x-input-label for="factory" :value="__('学部名')" />
            <x-text-input id="factory" class="block mt-1 w-full" type="text" name="factory" :value="old('factory')" autocomplete="factory" />
            <x-input-error :messages="$errors->get('factory')" class="mt-2" />
        </div>
        
          <div>
            <x-input-label for="department" :value="__('学科名')" />
            <x-text-input id="department" class="block mt-1 w-full" type="text" name="department" :value="old('department')" autocomplete="department" />
            <x-input-error :messages="$errors->get('department')" class="mt-2" />
        </div>
        
         

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
