@extends('layouts.Editmaster')

@section('content')

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="content-wrapper ScrollStyle vl">
  <br>
  <div class="container">
    @include('inc.Errors')
  </div>
  <div class="container">
    <br><br>
       <div class="row justify-content-center">
           <div class="profile-header-container">
               <div class="profile-header-img">
               @if(Auth::user()->avatar =='user.jpg')
                <img class="rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" class="user-image" alt="User Image" style="width:10px;height:100px" /><br><br>
                   @else
                   <img src="/storage/{{Auth::user()->email }}/{{ Auth::user()->avatar }}" class="user-image" alt="User Image" style="width:100px;height:100px">
                    @endif
               </div>
           </div>
         </div>
         <br>
         <div class="row justify-content-center">
             <h3>Hello! {{Auth::user()->name}} you can change your avatar here</h3>
           </div>
       <br>
       <div class="row justify-content-center">
           <form action="profile" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
           <div class="row">
               <div class="form-group">
                   <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
               </div>
               <div class="form-group">
                 <button type="submit" class="btn btn-primary">Change</button>
               </div>
            </div>

               <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
           </form>
<!-----@@@@@@@----->
<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="/images/p12.jpg" alt="Los Angeles" style="height:40%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="/images/p13.jpg" alt="Chicago" style="height:40%;">
        <div class="carousel-caption">
          <h3>Paris</h3>
          <p>Thank you, Paris!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="/images/p14.jpg" alt="New York" style="height:40%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!-----@@@@@@@----->
       </div>
   </div>
</div>




@endsection
