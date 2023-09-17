<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Post;


class UserController extends Controller
{
    public function index(Request $request)
    {
        
      
                    
          $users = User::paginate(20);
        
       $search = $request->input('search');
        
         $query = User::query();
         
         $params = $request->query();
         
       

        
        
            if ($search) {
            
             $spaceConversion = mb_convert_kana($search, 's');
            
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);
             
              foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
                
                $users = $query->paginate(20);
        }
        
        
          return view('users.index')
            ->with([
                'users' => $users,
                'search' => $search,
            ]);
    }
    
  
  
      
}
