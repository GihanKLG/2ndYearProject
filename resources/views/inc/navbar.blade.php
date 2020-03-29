<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <h1>WirelessTV</h1>
    <!-- User Account: style can be found in dropdown.less -->
    <!-- User Account: style can be found in dropdown.less -->
     <li class="dropdown user user-menu">
       <button href="#" class="dropdown-toggle btn btn-outline-dark" data-toggle="dropdown">
       @if(Auth::user()->avatar =='user.jpg')
                <img class="rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" class="user-image" alt="User Image" style="width:85px;height:85px" /><br><br>
                   @else
                   <img src="/storage/{{Auth::user()->email }}/{{ Auth::user()->avatar }}" class="user-image" alt="User Image" style="width:85px;height:85px">
                    @endif
         <span class="hidden-xs">{{auth::user()->name}} :- {{auth::user()->type}}</span>
       </button>
       <ul class="dropdown-menu">
         <!-- User image -->
         <li class="user-header">
         @if(Auth::user()->avatar =='user.jpg')
                <img class="rounded-circle" src="/storage/avatars/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" style="width:200px;height:200px" /><br><br>
                   @else
                   <img src="/storage/{{ Auth::user()->email }}/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" style="width:200px;height:200px">
                    @endif
            
            <br>
          <p>
             {{auth::user()->name}} - {{auth::user()->type}}
           </p>
         </li>

         <li class="user-footer">
           <div class="pull-left">
           <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
           </div>
           <div class="pull-right">
             <a href="/profile" class="btn btn-default btn-flat">profile</a>
           </div>
         </li>
       </ul>
     </li>
  </nav>
