<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session; 
class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user',$user));
    }

    public function update_avatar(Request $request){
 
        
 
        $user = Auth::user();
        $folder = $user->email;
        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
        
        
        $request->avatar->storeAs( $folder,$avatarName);
 
        $user->avatar = $avatarName;
        $user->save();
 
        return back()
            ->with('success','You have successfully upload image.');
 
    }

    public function admindashboard(){
        $user = Auth::user();
        return view('admin',compact('user',$user));
    }

    public function editordashboard(){
        $user = Auth::user();
        return view('editor',compact('user',$user));
    }
}
