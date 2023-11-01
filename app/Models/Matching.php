<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matching extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'match2_id',
        'match1_id',
        ];
    
    public $timestamps = true;
    
    const UPDATED_AT = null;
       
    protected $table = 'matchings';
    
    public function chat_room()
    {
        return $this->HasMany(Chat_room::class);
    }
    
    public function match1()
    {
        return $this->belongsTo(User::class,'match1_id');     
    }
    
    public function  match2()
    {
        return $this->belongsTo(User::class,'match2_id');
    }
    
    protected $guarded = ['id'];
}
