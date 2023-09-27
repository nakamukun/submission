<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
     
     
     
    public function store(Request $request): RedirectResponse
    {
      
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'college' => ['required' ,'string', 'max:255'],
            'factory' => ['required','string', 'max:255'],
            'department' => ['required','string', 'max:255'],
            'bio' => ['nullable', 'string','max:255'],
            'sex' => ['nullable', 'string','max:255'],
            'hobby' =>['nullable', 'string','max:255'],
            'height' =>['nullable', 'string','max:255'],
            'location' =>['nullable','string','max:255'],
            'age' =>['nullable','string','max:255'],
            'image_url'=>['string','max:255'],
            // 'img_url' => ['max:255'],
        ]);
        
       
       $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'college' => $request->college,
            'factory' => $request->factory,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
