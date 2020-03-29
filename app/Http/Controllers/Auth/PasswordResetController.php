<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PasswordResetController extends Controller
{
    public function show(){
       return view('auth.passwordreset');
    }

   public function reset(Request $request){
        
        
       $this->validate($request, [
            'password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6'
        ]);
        
        $user = Auth::user();
        $user_email = $user->email;
        $data = $request->input();
        if(Auth::attempt([ 'email'=> $user_email, 'password'=>$data['password']])){
         
            DB::table('users')
            ->where('email', $user_email)
            ->update(['password' => bcrypt($data['new_password']) ]);

            $type = DB::table('users')
            ->where('email',  $user_email)
            ->value('type');
          
            if($type=='admin'){
            return redirect('admin')->with('flash_message_error',' data update successfully ');
            }
            
            else if($type=='editor'){
                return redirect('editor')->with('flash_message_error',' data update successfully ');
            }
        }

         else
         {
            return redirect('/reset')->with('flash_message_error',' duplicate E-mail address or password ');
         }
   }
}
