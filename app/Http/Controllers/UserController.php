<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Reaction;



class UserController extends Controller
{
    public function index(Request $request)
    {
        
        $reactionUserId = Reaction::where('from_user_id', \Auth::user()->id)->get()->pluck('to_user_id');
                    
          
       
          $college = $request->input('college',);
          $factory = $request->input('factory');
          $department = $request->input("department");
       
          $query = User::query();
         
        //   $params = $request->query();
         
        if ($college) {

            $query->where('college', 'like', "%{$college}%");
       
        }   
            
        if ($factory) {
            
          
            $query->where('factory', 'like', "%{$factory}%");
        }
        
         if ($department) {
   
            $query->where('department', 'like', "%{$department}%");

        } 
    
        $users= $query->where('id', '<>', \Auth::user()->id)->paginate();
        
        
            return view('users/index')
            ->with([
                'users' => $users,
                'college' => $college,
                'factory' => $factory,
                'department' =>$department,
                
            ]);
            
           
          
    }    
    
    
    public function show( User $user )
    {
        
        
        
        $users = User::paginate(10);
        return view('users/show')->with(['user' => $user]);
        
    }
    
     public function create()
    {
        $authUser = Auth::user();
        return view('users/create', compact('authUser'));
    }
    
    public function update(UserRequest $request)
    {
         $authUser = Auth::user(); 
         
         $authUser->name = $request->input('name'); 
         
         $uploadFile = $request->file('image'); if (!empty($uploadFile)) { $thumbnailName = $request->file('image')->hashName(); 
         
         $request->file('image')->storeAs('public/profile_images', $thumbnailName);
         $authUser->image = $thumbnailName; } $authUser->save();
         
         
         return redirect('user/create')->with('flash_message', '変更しました');
    }
    
    public function store(Request $request, Post $post)
    {
       
        
         
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
}