@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
   Edit catogary
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
        
       
       

 
   <br>
    
          <form method="POST" action="{{action('CatergariesController@update', $id)}}" class="form-horizontal">
          {{ csrf_field() }}
          <input name="_method" type="hidden" value="PATCH">
          <div class="control-group">
              <label class="control-label">Catagory :</label>
              <div class="controls">
              <input type="text" class="form-control" name="catergary_name" value="{{$catergary->catergary_name}}">
              </div>
            </div>
<br><br>
            <div class="form-actions">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
            </div>
          </form>
  
  

          </div>
      </div>
    


  </section>

@endsection
