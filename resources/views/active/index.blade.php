@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
    Dissable users
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
        
       
        @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
         @endif
         <br>
         @if(Auth::user()->type =='admin') 
          <div class="bg-info text-white p-3">

</div>
@endif
<div class="bg-info text-white p-3">
<form action="/searchdesableuser" method="POST" role="search">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" name="search" class="form-control" placeholder="Search & Enter">
        </div>
    </div>

</form>

 </div>
 
   <br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th style="text-align:center">ID</th>
        <th style="text-align:center">Name</th>
        <th style="text-align:center">Email</th>
        <th style="text-align:center"> Address</th>
        <th style="text-align:center">Contact</th>
        <th style="text-align:center">Type</th>
        <th style="text-align:center">Zip Code</th>
        @if(Auth::user()->type =='admin')  
        <th colspan="2" style="text-align:center">Action</th>
        @endif
      </tr>
    </thead>
    <tbody>
      
      @foreach($users as $user)
     
      <tr>
        <td style="text-align:center">{{$user['id']}}</td></h3>
        <td style="text-align:center">{{$user['name']}}</td>
        <td style="text-align:center">{{$user['email']}}</td>
        <td style="text-align:center">{{$user['address']}}</td>
        <td style="text-align:center">{{$user['contact']}}</td>
        <td style="text-align:center">{{$user['type']}}</td>
        <td style="text-align:center">{{$user['zipcode']}}</td>
        
        
       
        <td><a href="{{action('PassportController@edit', $user['id'])}}" class="btn btn-success">{{$user['active/deactive']}}</a></td>
      
        
      </tr>
      @endforeach
    </tbody>
  </table>
  

          </div>
      </div>
    


  </section>

@endsection
