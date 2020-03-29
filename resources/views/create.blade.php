@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   <br> <h1>
  New catogary
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
    
   <form method="POST" action="{{url('catergaries')}}" class="form-horizontal">
          {{ csrf_field() }}
            
          <div class="control-group">
              <label class="control-label">Catagory :</label>
              <div class="controls">
                <input type="text" class="form-control" name="catergary_name"  />
              </div>
            </div>
            <br>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
  
  

          </div>
      </div>
    


  </section>

@endsection
