@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
    catogary
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
<a href="{{ url('catergaries/create') }}" class="btn btn-danger">Add new</a>
</div>
@endif
<div class="bg-info text-white p-3">
<form action="/search" method="POST" role="search">
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
        @if(Auth::user()->type =='admin')  
        <th colspan="2" style="text-align:center">Action</th>
        @endif
      </tr>
    </thead>
    <tbody>
     
     

      @foreach($catergaries as $catergary)
      <tr>
        <td style="text-align:center">{{$catergary['id']}}</td>
        <td style="text-align:center">{{$catergary['catergary_name']}}</td>
        @if(Auth::user()->type =='admin')       
        <td style="text-align:center"><a href="{{action('CatergariesController@edit', $catergary['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('CatergariesController@destroy', $catergary['id'])}}" method="post">
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
  

          </div>
      </div>
    


  </section>

@endsection
