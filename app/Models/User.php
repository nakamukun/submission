<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'college',
        'age',
        'bio',
        'hobby',
        'height',
        'sex',
        'location',
        'factory',
        'department',
        'password',
        'profile_photo_path',
        'image_url',
        'profile_image',
        
        ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
     public function reaction()
     {
         return $this->belongsTo(Reaction::class);
     }
     
     public function chat_messege()
     {
         return $this->HasMany(Chat_messege::class);
     }
     
     public function chat_room()
     {
         return $this->HasMany(Chat_room::class);
     }
     

     
}
