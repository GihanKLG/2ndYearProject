<?php
namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class UserRegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegisterForm(Request $request)
    {
        $catergaries=\App\Catergary::all();
        return view('auth.user-register',compact('catergaries'));
       
    }
    
    public function register(Request $req){
       
        $this->validate($req, [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:300',
            'email' => 'required|string|email|max:255',
            'state' => 'required|string|max:20',
            'contact' => 'required|string|max:10',
            'city' => 'required|string|max:20',
            'type' => 'required|string|max:10',
            'zipcode' => 'required|string|max:300',
            'password' => 'required|string|min:6',
        ]);
        
        $user_name = $req->input('name');
        $user_address = $req->input('address');
        $user_email = $req->input('email');
        $user_city = $req->input('city');
        $user_contact = $req->input('contact');
        $user_type = $req->input('type');
        $user_state = $req->input('state');
        $user_zipcode = $req->input('zipcode');
        $user_password = $req->input('password');
    
       
      
      $data = array('name' => $user_name, 'address' => $user_address, 'email' => $user_email, 'state' => $user_state, 'contact' => $user_contact, 'city' => $user_city, 'type' => $user_type, 'zipcode' => $user_zipcode, 'password' => bcrypt($user_password) );
                  
      DB::table('users')->insert($data);
      
      $galleryId =$user_email; // for test
      $path = public_path().'/storage/'.$galleryId;
      File::makeDirectory($path, $mode = 0777, true, true);


      return redirect('/UserDetails')->with('flash_message_error',' data entry successfully ');

        
    }
    

}


