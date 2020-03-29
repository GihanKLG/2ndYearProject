@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <br>
  <div class="container">
    @include('inc.Errors')
  </div>
  <br>
<div class="container">
  <form method="POST" action="{{ route('reset.submit') }}" accept-charset="UTF-8" id="formcontrol" enctype="multipart/form-data">
  {{ csrf_field() }}
  
     <div class="form-group">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Password :-</label>
      <input class="form-control" placeholder="old password" name="password" type="password" value="" id="password">
    </div>
    </div>

    <div class="form-group">
  <div class="form-group col-md-6">
    <label for="inputEmail4">Enter new password :-</label>
    <input type="password" class="form-control" id="name" name="new_password" placeholder="new password" >
  </div>
  </div>

     <br>
     <div class="row">
     <div class="form-group col-md-6">
      <div class="col-md-6">
       <div class="form-group">
        <button type="submit" class="btn btn-lg send-data btn-block btn-outline-success">update</button>
      </div>
      </div>
    </div>
    </div>
</form>
</div>
  <br>
</div>
@endsection
