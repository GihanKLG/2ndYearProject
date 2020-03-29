<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
      @if(Auth::user()->avatar =='user.jpg')
                <img class="rounded-circle" src="/storage/avatars/{{Auth::user()->avatar }}"class="img-circle" alt="User Image" style="width:60px;height:60px" /><br><br>
                   @else
                   <img src="/storage/{{Auth::user()->email }}/{{Auth::user()->avatar }}" class="img-circle" alt="User Image" style="width:60px;height:60px">
                    @endif 
                    <br>
                    <a href="/profile">Change Avatar</a>
      </div>
      <div class="pull-left info">
        <p>{{auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="active">
       
        <a href="/admin">
        
        
          <i class="fa fa-dashboard"></i> <span><b>Dashboard</b></span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <span>Wireless Slides</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/Upload"><i class="fa fa-circle-o"></i> Upload Slides</a></li>
          <li><a href="/Approved"><i class="fa fa-circle-o"></i> Approved Slides</a></li>
          <li><a href="/Pending"><i class="fa fa-circle-o"></i>  Pending Slides</a></li>
          <li><a href="/Rejected"><i class="fa fa-circle-o"></i>  Rejected Slides</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">

          <span>Video Promotions</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Upload Videos</a></li>
          <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Approved Videos</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Pending Videos</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">

          <span>Category</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="catergaries"><i class="fa fa-circle-o"></i> Category details</a></li>
         

        </ul>
      </li>
      <li class="treeview">
        <a href="#">

          <span>User Groups</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="UserDetails"><i class="fa fa-circle-o"></i> All Users</a></li>
          <li><a href="/reset"><i class="fa fa-circle-o"></i>Password reset </a></li>
          <li><a href="passports"><i class="fa fa-circle-o"></i> Dissable Users</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">

          <span>Devices</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="device"><i class="fa fa-circle-o"></i> All Devices</a></li>
          <li><a href="pending"><i class="fa fa-circle-o"></i>Pending Devices</a></li>
          <li><a href="reject"><i class="fa fa-circle-o"></i>Reject Devices</a></li>
          <li><a href="/device/location"><i class="fa fa-circle-o"></i> Device Location</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Device Status</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">

          <span>News</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/Upload/news"><i class="fa fa-circle-o"></i> Upload News</a></li>
          <li><a href="/Played/news/1"><i class="fa fa-circle-o"></i> Played News</a></li>
          <li><a href="/rejected/news/1"><i class="fa fa-circle-o"></i> Rejected News</a></li>

        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
