<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/_all-skins.min.css">

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="<?=base_url('dashboard')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>G</span>
      <!-- logo for regular state and mobile devices --> 
      <span class="logo-lg"><b>sistem</b>GEREJA</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">      
            <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">3</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 3 tasks</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="user-image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>   <!-- fungsi ini untuk menampilkan Superadmin dan admin sesuai dengan field yang didatabase -->
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">

                <p>
                <?=$this->fungsi->user_login()->name?>  <!-- tampilkan name sesuai field yang ada diDatabase -->
                  <small> <?=$this->fungsi->user_login()->address?></small> <!-- tampilkan addres/alamat sesuai field yang ada diDatabase -->
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?= site_url('auth/logout')?>" class="btn btn-default bg-red">Sign out</a>
                </div>
              </li>
            </ul>
          </li>      
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column -->
  <aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-160x160.jpg" class="img-circle">
        </div>
        <div class="pull-left info">
          <p><?=ucfirst($this->fungsi->user_login()->username)?></p> <!-- ucfisrt fungsi nya agar huruf yang pertama besar -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>

      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="<?= site_url('dashboard')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
        </li>    
        <li>
            <a href="<?= site_url('keuangan')?>"><i class="fa fa-truck"></i> <span>Keuangan</span>
        </a>
        </li>    
        <li>
            <a href="<?= site_url('ibadah')?>"><i class="fa fa-users"></i> <span>Ibadah</span>
        </a>
        </li>    
         
        <li class="treeview">
          <a href="#">
            <i class="fa fa-archive"></i> 
            <span>Pendataan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url()?>Jemaat"><i class="fa fa-circle-o"></i> Data Jemaat</a></li>
            <li><a href="<?= site_url('baptis')?>"><i class="fa fa-circle-o"></i> Baptis</a></li>
            <li><a href="<?= site_url('perkawian')?>"><i class="fa fa-circle-o"></i> Perkawinan</a></li>
            <li><a href="<?= site_url('kelahiran')?>"><i class="fa fa-circle-o"></i> Kelahiran</a></li>
            <li><a href="<?= site_url('kematian')?>"><i class="fa fa-circle-o"></i> Kematian</a></li>
            <li><a href="<?= site_url('pindahjemaat')?>"><i class="fa fa-circle-o"></i> Pindah Jemaat</a></li>
            <li><a href="<?= site_url('pengurusgereja')?>"><i class="fa fa-circle-o"></i> Pengurus Gereja</a></li>
            <li><a href="<?= site_url('pendeta')?>"><i class="fa fa-circle-o"></i> Pendeta</a></li>
          </ul>
        </li>
        
        <?php if($this->session->userdata('level') == 1 ) { ?> <!-- heading Antara SuperAdmin dan Admin, Kondisi ini tu jika levelnya 1 dia akan ditampilkan -->
        <li class="header">SETTINGS</li>
        <li><a href="<?= site_url('user')?>"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <?php } ?>
      </ul>
    </section>
  </aside>