<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/colorpicker.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/datepicker.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css') }}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-wysihtml5.css') }}" />
<link href="{{ asset('fronts/backend_fronts/font-awesome.css') }}" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('/logout') }}"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    
    <li class=""><a title="" href="{{ url('/logout') }}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard2</a>
  <ul>
    <li ><a href="{{ url('/editor') }}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
   
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>User Group</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="EditorDetails">User Details</a></li>
        <li><a href="{{ url('/reset') }}">Password Reset Form</a></li>
        
      </ul>
    </li>
   
    <li ><a href="{{ url('catergaries') }}"><i class="icon icon-home"></i> <span>Catogary</span></a> </li>
    
</div>

<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->


<!--close-left-menu-stats-sidebar-->

<div id="content">

<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>User Details</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>user-info</h5>
        </div>
        <div class="widget-content nopadding">
        
       
        <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif

     <br>
         
      <br>

      <div class="bg-info text-white p-5">
<form action="/searchuser" method="POST" role="search">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" name="search" class="form-control" placeholder="Search & Enter">
        </div>
    </div>

    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>State</th>
        <th>Contact</th>
        <th>City</th>
        <th>Type</th>
        <th>Zip Code</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($users as $user)
     
      <tr>
        <td>{{$user['id']}}</td></h3>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['address']}}</td>
        <td>{{$user['state']}}</td>
        <td>{{$user['contact']}}</td>
        <td>{{$user['city']}}</td>
        <td>{{$user['type']}}</td>
        <td>{{$user['zipcode']}}</td>
        
        
        <td><a href="{{action('UserDetailsController@show', $user['id'])}}" class="btn btn-success">Show</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
        </div>
      </div>
      
        
                        
<!--end-Footer-part--> 
<script src="{{ asset('js/backend_js/jquery.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.ui.custom.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap-colorpicker.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap-datepicker.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.toggle.buttons.js') }}"></script> 
<script src="{{ asset('js/backend_js/masked.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.uniform.js') }}"></script> 
<script src="{{ asset('js/backend_js/select2.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.js') }}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_common.js') }}"></script> 
<script src="{{ asset('js/backend_js/wysihtml5-0.3.0.js') }}"></script> 
<script src="{{ asset('js/backend_js/jquery.peity.min.js') }}"></script> 
<script src="{{ asset('js/backend_js/bootstrap-wysihtml5.js') }}"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
