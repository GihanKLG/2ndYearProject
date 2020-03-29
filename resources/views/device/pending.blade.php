@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
    Pending devices
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
<form action="/pendingsearch" method="POST" role="search">
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
        <th style="text-align:center">Location</th>
        <th style="text-align:center">current state</th>
        @if(Auth::user()->type =='admin')  
        <th colspan="2" style="text-align:center">Action</th>
        @endif
      </tr>
    </thead>
    <tbody>
     
     

      @foreach($devices as $device)
      <tr>
        <td style="text-align:center">{{$device['id']}}</td>
        <td style="text-align:center">{{$device['location']}}</td>
        <td style="text-align:center">{{$device['online/offline']}}</td>
        @if(Auth::user()->type =='admin')       
        <td ><a href="{{action('pendingController@edit', $device['id'])}}" class="btn btn-success">Accept</a></td>
        <td><a href="{{action('pendingController@show', $device['id'])}}" class="btn btn-danger">Reject</a></td>
       @endif
      </tr>
      @endforeach
    </tbody>
  </table>
  

          </div>
      </div>
    


  </section>

@endsection
