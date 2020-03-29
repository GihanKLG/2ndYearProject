<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class AdminLoginController extends Controller
{
  public function __construct()
   {
   $this->middleware('guest');
   }


    public function showLoginForm(){
        return view('auth.user-login');
    }

   

    public function login(Request $request){
     
      if($request->IsMethod('post')){
          $data = $request->input();
          if(Auth::attempt([ 'email'=>$data['email'], 'password'=>$data['password'], 'type'=>'admin'], $request->remember)){
           // Session::put('adminSession' , $data['email']);
            return redirect('/admin');

          }
         else if(Auth::attempt([ 'email'=>$data['email'], 'password'=>$data['password'], 'type'=>'editor'], $request->remember)){
         // Session::put('adminSession' , $data['email']);
          return redirect('/editor');
                          
        }
          else{
          return redirect('/')->with('flash_message_error',' Invalid Username, Job_Type or password ');
          }
         return redirect()->back()
         ->withInput($request->only($this->username(), 'remember'));

      }
    }

     
}
