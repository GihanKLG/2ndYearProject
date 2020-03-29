@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
    Edit details
    </h1>

  </section>

  <!-- Main content -->
  <section class="content">
    
  <div id="content">

<div id="content-header">
  
 
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span5">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
         
        </div>
        <div class="widget-content nopadding">
        
       
       

<div class="text-center">
       
         </div><!--/col-3-->
    	
         @if($user->avatar =='user.jpg')
                <img src="/storage/avatars/{{$user->avatar }}" class="user-image" alt="User Image" style="width:85px;height:85px" /><br><br>
                   @else
                   <img src="/storage/{{$user->email }}/{{ $user->avatar }}" class="user-image" alt="User Image" style="width:85px;height:85px">
                    @endif


          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                <form method="POST" action="{{action('UserDetailsController@update', $id)}}" id="registrationForm">
                {{ csrf_field() }}
          <input name="_method" type="hidden" value="PATCH">

             <div class="form-group">
    <label for="inputAddress">User Name :-</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email :-</label>
      <input class="form-control"  name="email" type="email" value="{{$user->email}}" id="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Address :-</label>
      <input class="form-control"  name="address" type="text" value="{{$user->address}}" id="password">
    </div>
    </div>

  <div class="form-group">
    <label for="inputAddress2">Contact No :-</label>
    <input class="form-control"  name="contact" type="text" value="{{$user->contact}}" id="contact">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City :-</label>
      <input class="form-control"  name="city" type="text" value="{{$user->city}}" id="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State :-</label>
      <input class="form-control"  name="state" type="text" value="{{$user->state}}" id="state">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip :-</label>
      <input class="form-control"  name="zipcode" type="text"  value="{{$user->zipcode}}" id="zipcode">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState">Type :-</label>
      <select id="type" name="type" class="form-control">
        <option selected>editor</option>
        <option>admin</option>
       
      </select>
    </div>
    
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
                               	
                            </div>
                      </div>
              	</form>
  

          </div>
      </div>
    


  </section>

@endsection
