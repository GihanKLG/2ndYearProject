<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Catergary;
use App\User;
use App\Device;
use Illuminate\Support\Facades\Input;
class SearchController extends Controller
{
    public function search(Request $request){
       
 
 
 
 $q = Input::get ( 'search' );
 $user = Catergary::where ( 'catergary_name', 'LIKE', '%' . $q . '%' )->orWhere ( 'id', 'LIKE', '%' . $q . '%' )->get ();
 if (count ( $user ) > 0)
     return view ( 'search' )->withDetails ( $user )->withQuery ( $q );
 else
     return view ( 'search' )->withMessage ( 'No Details found. Try to search again !' );
  
  
    }

    public function searchuser(Request $request){

        
 
 $q = Input::get ( 'search' );
 $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->orWhere ( 'email', 'LIKE', '%' . $q . '%' )->orWhere ( 'active/deactive', 'LIKE', '%' . $q . '%' )->orWhere ( 'type', 'LIKE', '%' . $q . '%' )->get ();
 if (count ( $user ) > 0)
     return view ( 'searchuser' )->withDetails ( $user )->withQuery ( $q );
 else
     return view ( 'searchuser' )->withMessage ( 'No Details found. Try to search again !' );
  
  
    }

public function searchdesableuser(Request $request){
    $q = Input::get ( 'search' );
    $user = User::where ( 'name', 'LIKE', '%' . $q . '%' )->get ();    
    if (count ( $user ) > 0)
    return view ( 'searchdesableuser' )->withDetails ( $user )->withQuery ( $q );
    else
     return view ( 'searchdesableuser' )->withMessage ( 'No Details found. Try to search again !' );
}
    
   


public function devicesearch(Request $request){
    $q = Input::get ( 'search' );
    $device = Device::where ( 'location', 'LIKE', '%' . $q . '%' )->orWhere ( 'id', 'LIKE', '%' . $q . '%' )->get ();    
    if (count ( $device ) > 0)
    return view ( 'devicesearch' )->withDetails ( $device )->withQuery ( $q );
    else
     return view ( 'devicesearch' )->withMessage ( 'No Details found. Try to search again !' );   
}


public function pendingsearch(Request $request){
    $q = Input::get ( 'search' );
    $device = Device::where ( 'location', 'LIKE', '%' . $q . '%' )->orWhere ( 'id', 'LIKE', '%' . $q . '%' )->get ();    
    if (count ( $device ) > 0)
    return view ( 'device.pendingsearch' )->withDetails ( $device )->withQuery ( $q );
    else
     return view ( 'device.pendingsearch' )->withMessage ( 'No Details found. Try to search again !' );   
}

public function rejectsearch(Request $request){
    $q = Input::get ( 'search' );
    $device = Device::where ( 'location', 'LIKE', '%' . $q . '%' )->orWhere ( 'id', 'LIKE', '%' . $q . '%' )->get ();    
    if (count ( $device ) > 0)
    return view ( 'device.rejectsearch' )->withDetails ( $device )->withQuery ( $q );
    else
     return view ( 'device.rejectsearch' )->withMessage ( 'No Details found. Try to search again !' );   
}

}





