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

<!--start-top-serch-->

<!--close-top-serch--> 

<!--sidebar-menu-->

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

<!--close-left-menu-stats-sidebar-->

<div id="content">

<div id="content-header">
  <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>System User Registration Form</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
        @if(Session::has('flash_message_error'))
        
        
        <div class="alert alert-error alert-block">
   <button type="button" class="close" data-dismiss="alert">×</button>	
   <strong> {{!! Session('flash_message_error') !!}}</strong>
</div>

       @endif

       
          <form method="POST" action="{{ route('user.register.submit') }}" class="form-horizontal">
          {{ csrf_field() }}
            <div class="control-group">
              <label class="control-label">System User Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder="Admin/Editor Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">E-mail :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" placeholder="E-mail" />
              </div>
            </div>
            
           <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Address" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">State :</label>
              <div class="controls">
                <input type="text" class="span11" name="state" placeholder="State" />
              </div>
            </div>

            
            <div class="control-group">
              <label class="control-label">Contact :</label>
              <div class="controls">
                <input type="text" class="span11" name="contact" placeholder="contact" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">City :</label>
              <div class="controls">
                <input type="text" class="span11" name="city" placeholder="City" />
              </div>
            </div>
          
        
            <div class="control-group">
              <label class="control-label">Job Type :</label> 
              <div class="controls">
             <select class="form-control" name="type" id="type" placeholder="job type">
                      <option>admin</option>
                      <option>editor</option>
                      @foreach($catergaries as $catergary)
                      <option value="{{ $catergary->catergary_name }}">{{($catergary->catergary_name) }}</option>
                     @endforeach
                      </select>
                      </div>
            </div> 
  
            <div class="control-group">
              <label class="control-label">Password input :</label>
              <div class="controls">
                <input type="password"  class="span11" name="password" placeholder="Enter Password"  />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Zip Code :</label>
              <div class="controls">
                <input type="text" class="span11" name="zipcode" placeholder="zip code" />
              </div>
            </div>
         
     
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
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
