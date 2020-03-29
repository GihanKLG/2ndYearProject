@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
  Search catogary
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
                <th style="text-align:center">catogary name</th>
                @if(Auth::user()->type =='admin') 
                <th colspan="2" style="text-align:center">Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td style="text-align:center">{{$user->id}}</td>
                <td style="text-align:center">{{$user->catergary_name}}</td>
                @if(Auth::user()->type =='admin') 
                <td style="text-align:center"><a href="{{action('CatergariesController@edit', $user['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
          <form action="{{action('CatergariesController@destroy',$user['id'])}}" method="post">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
        @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
     

 

   
  
        
      </div>
    


  </section>

@endsection
