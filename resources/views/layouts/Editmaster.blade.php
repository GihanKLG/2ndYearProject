
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="/images/1539693222.ico">
    <title>WirelessTV | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/new_css/app.css')}}">
    <link rel="stylesheet" href="css/new_css/bootstrap.css">
    <script src="{{asset('js/new_css/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/new_css/app.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <style>

#image:hover {
    border: 2px solid blue;
    border-bottom: 2px solid blue;
    transform: scale(1.1);
}

#image{
    border-radius:8px;
    border:2px solid #fff;
    margin-left:18px;
}

.dot {
    height: 15px;
    width: 15px;
    background-color: #fff;
    border-radius: 50%;
    display: inline-block;
}
.vl {
    border-left: 17px solid #AAAAAA;
    height: 100%;
}
.progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; }
.bar { background-color: #B4F5B4; width:0%; height:25px; border-radius: 3px; }
.percent { position:absolute; display:inline-block; top:0%; left:48%; color: #7F98B2;}

#Uploaded_image{
  padding: 10px;
}

.ScrollStyle
{
    max-height: 100px;
    overflow-y: scroll;
}
</style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>W</b>TV</span>
          <!-- logo for regular state and mobile devices -->
         <br> <span class="logo-lg"><b>Welcome</b></span>
        </a>

    @include('inc.navbar')

  </header>

    @include('inc.AddminSidebar')

    @yield('content')
</div>
</body>
</html>
