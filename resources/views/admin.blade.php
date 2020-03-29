@extends('layouts.master')

@section('content')
<div class="content-wrapper ScrollStyle vl">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
    </h1>

  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
            <?php $N=0; ?>
            @foreach($user as $users)
                <?php $N++; ?>
            @endforeach
            <h3>{{$N}}</h3>
            <p>Number Of Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="pull-left image">

        </div>
          <div class="inner">
            <?php $M=0; ?>
           
            <h3>{{$M}}</h3>
            <p>Number Of images</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
            <h3></h3>

            <p></p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-orange">
          <div class="inner">
            <h3></h3>

            <p></p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="nav-tabs-custom">
          <!-- Tabs within a box -->

          <div class="tab-content no-padding">
            <!-- Morris chart - Sales -->

          </div>
        </div>
        <!-- /.nav-tabs-custom -->

        <!-- Chat box -->
        <div class="col-md-6">
                      <!-- USERS LIST -->

                          <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->
                      </div>
                      <!--/.box -->
                    </div>
                    <!-- /.col -->
        <!-- /.box (chat box) -->

        <!-- TO DO List -->

        <!-- Map box -->

        <!-- /.box -->

        <!-- solid sales graph -->

        <!-- /.box -->

        <!-- Calendar -->


  </section>

@endsection
