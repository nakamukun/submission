<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MatchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(UserController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('users/index');
    Route::get('/create' , 'create')->name('users/create');
    Route::get('/users/{user}','show')->name('show');
});

Route::group(['middleware' => ['auth']], function(){
  Route::post('/reaction', [reactionController::class,'store'])->name('reactions/store');
  Route::get('/match',[matchController::class, 'match'])->name('users/match');
  Route::get('/chat', [chatController::class,'chat'])->name('users/chat');
 
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
