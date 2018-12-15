<?php
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Sistem informasi nilai siswa SMA N 3 Tuban';
?>
<div class="wrapper">

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" background>
          </a>
          <ul class="treeview-menu">
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <span>Siswa</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=Url::to(['nilai/index'])?>"><i class="fa fa-circle-o"></i>Nilai</a></li>
            <li><a href="<?=Url::to(['biodata-siswa/index'])?>"><i class="fa fa-circle-o"></i>Detail siswa</a></li>
          </ul>
        </li>
        <li>
          <a href="<?=Url::to(['mapel/index'])?>">
            <span>Mata Pelajaran</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <span>Guru</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=Url::to(['nilai/index'])?>"><i class="fa fa-circle-o"></i>Nilai</a></li>
            <li><a href="<?=Url::to(['mapel/index'])?>"><i class="fa fa-circle-o"></i>Mata Pelajaran</a></li>
            <li><a href="<?=Url::to(['data-siswa/index'])?>"><i class="fa fa-circle-o"></i>Data Siswa</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            </i> <span>Admin</span>
            <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=Url::to(['guru/index'])?>"><i class="fa fa-circle-o"></i>Guru</a></li>
            <li><a href="<?=Url::to(['siswa/index'])?>"><i class="fa fa-circle-o"></i>Siswa</a></li>
            <li><a href="<?=Url::to(['user/index'])?>"><i class="fa fa-circle-o"></i>User</a></li>
          </ul>
        </li>
        <li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="jumbotron">
        <center><h2>Selamat Datang</h2> <p><h2>SISTEM INFORMASI NILAI SISWA <p><h2>ADMIN<p></h2></center>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>