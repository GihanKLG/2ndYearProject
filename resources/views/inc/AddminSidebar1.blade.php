<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="/images/{{auth::user()->avatar}}" class="img-circle" alt="User Image" style="width:60px;height: :60px"><br>
        <a href="/Dashboard/ChangeEditorAvatar">Change Avatar</a>
      </div>
      <div class="pull-left info">
        <p>{{auth::user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">

      <li class="active">
        <a href="/editor">
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
          <li><a href="/Editor/Pending"><i class="fa fa-circle-o"></i> Pending Slides</a></li>
          <li><a href="/Editor/Accepted"><i class="fa fa-circle-o"></i> Approved Slides</a></li>
          <li><a href="/Editor/Rejected"><i class="fa fa-circle-o"></i>  Rejected Slides</a></li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">

          <span>Video Promotions</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Pending Videos</a></li>
          <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Approved Videos</a></li>
          <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Rejected Videos</a></li>

        </ul>
      </li>

      <li class="treeview">
        <a href="#">

          <span>News</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="/Manage/news"><i class="fa fa-circle-o"></i> Manage News</a></li>
          <li><a href="/Played/news/2"><i class="fa fa-circle-o"></i> Played News</a></li>
          <li><a href="/rejected/news/2"><i class="fa fa-circle-o"></i> Rejected News</a></li>

        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
