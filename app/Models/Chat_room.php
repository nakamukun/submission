<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat_room extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'matching_id',
        ];
        
    public $timestamps = true;
    
    const UPDATED_AT = null;
    
    public function matching()
    {
          return $this->belongsTo(Matching::class);
    }
    

}
