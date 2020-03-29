@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
   Search Device
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
    <div class="span6">
     
     @if(isset($details))
        <h6> The Search results for your query <b> {{ $query }} </b> are :</h6>
   <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="text-align:center">ID</th>
                <th style="text-align:center">Location</th>
                <th style="text-align:center">current state</th>
                <th colspan="2" style="text-align:center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $device)
            <tr>
            @if($device['states'] =='pending')
        <td style="text-align:center">{{$device['id']}}</td>
        <td style="text-align:center">{{$device['location']}}</td>
        <td style="text-align:center">{{$device['online/offline']}}</td>
        @if(Auth::user()->type =='admin')       
        <td style="text-align:center"><a href="{{action('deviceController@edit', $device['id'])}}" class="btn btn-warning">Edit</a></td>
        
       @endif
      </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    @endif
</div>
     

 

   
  
        
      </div>
    


  </section>

@endsection
