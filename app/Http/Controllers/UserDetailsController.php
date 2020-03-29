<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=\App\User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $active = DB::table('users')
            ->where('id', $id)
            ->value('active/deactive');


        if($active=='active'){
            DB::table('users')
            ->where('id', $id)
            ->update(['active/deactive' => 'deactive']);
                   }
       else{
        DB::table('users')
        ->where('id', $id)
        ->update(['active/deactive' => 'active']);
       }
       return redirect('UserDetails');   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \App\User::find($id);
        return view('user.edit',compact('user','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= \App\User::find($id);
        $user->name=$request->get('name');
        $user->address=$request->get('address');
        $user->state=$request->get('state');
        $user->contact=$request->get('contact');
        $user->city=$request->get('city');
        $user->type=$request->get('type');
        $user->zipcode=$request->get('zipcode');
        $user->save();
        return redirect('UserDetails');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
