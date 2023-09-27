<div class="flex mb-4" x-data="picturePreview()">
    <div class="mr-3">
        <img
             id="preview"
             src="{{ isset(Auth::user()->image_url) ?  Auth::user()->image_url : asset('images/user_icon.png') }}"
             alt=""
             class="w-16 h-16 rounded-full object-cover border-none bg-gray-200">
    </div>
    <div class="flex items-center">
      
       <div>
            <x-input-label for="image_url" :value="__('画像')" />
            <x-text-input id="image_url" name="image_url" type="file" accept="image/*" class="mt-1 block w-full mx-auto" :value="old('image_url', Auth::user()->image_url)" autocomplete="image_url" />
            <x-input-error class="mt-2" :messages="$errors->get('image_url')" />
        </div>
      
    </div>
</div>
