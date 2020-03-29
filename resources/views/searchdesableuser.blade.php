@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
  Search user
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
                <th style="text-align:center">name</th>
                <th style="text-align:center">E-mail</th>
                @if(Auth::user()->type =='admin')
                <th colspan="2" style="text-align:center">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            @if($user['active/deactive'] =='deactive')
            <tr>
                <td style="text-align:center">{{$user->id}}</td>
                <td style="text-align:center">{{$user->name}}</td>
                <td style="text-align:center">{{$user->email}}</td>
                @if(Auth::user()->type =='admin')
                <td><a href="{{action('UserDetailsController@show', $user['id'])}}" class="btn btn-success" style="text-align:center">{{$user['active/deactive']}}</a></td>
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
