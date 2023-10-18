<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\ChatroomController;
use App\Http\Controllers\Chat_messageController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(UserController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('users/index');
    Route::get('/create' , 'create')->name('users/create');
    Route::get('/users/{user}','show')->name('show');
});

Route::group(['middleware' => ['auth']], function(){
  Route::get('/match',[matchController::class, 'match'])->name('users/match');
  Route::get('/chat', [chatController::class,'chat'])->name('users/chat');
//   Route::get('/chatroom',[chatroomController::class,'chatroom'])->name('users/chatroom');
  Route::post('/reaction', [reactionController::class,'store'])->name('reactions/store');
  Route::post('/chat_messages/{chat_room}',[Chat_messageController::class,'store'])->name('chat_messages/store');
  Route::post('/chatroom/',[chatroomController::class,'sendMessage'])->name('/sendMessage');
  Route::get('/chatroom/{matching}',[chatroomController::class,'chatroom'])->name('users/chatroom');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
