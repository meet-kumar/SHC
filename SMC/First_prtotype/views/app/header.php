
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>APP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/dist/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>meet/AdminLTE/dist/css/skins/skin-red.css">

    <style type="text/css">
    .icon-background{
      color:#6C6;
    }
    .sizemeet{
      font-size:75;
    }
    .icon-color{
      color:#FFF;
    }
    #adfoot{
      
    }
    .back11{
      background-image:url('http://ordiges.com/wp-content/uploads/2015/03/Fotolia_65704515_M.jpg');
    }
    </style>
  </head>

  <body class="hold-transition skin-red sidebar-mini back11">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="<?php echo site_url('teacher/user_login'); ?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>TMH</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="<?php echo base_url(); ?>meet/D_Logo/avatar.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"> username</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>meet/D_Logo/avatar.png" class="img-circle" alt="User Image">
                    <p>
                       echo $username
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <!-- <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div> -->
                    <div class="pull-right">
                      <a href="<?php echo site_url('teacher/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>meet/D_Logo/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>echo $username; </p>
              <!-- Status -->
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            
            <li><a href="<?= base_url();?>index.php/demo/search"><i class="fa fa-home"></i><span>Book Appointment</span></a></li>
            <li><a href="<?= base_url();?>index.php/demo"><i class="fa fa-home"></i><span>Health Tracker</span></a></li>
            <li><a href="<?= base_url();?>index.php/demo"><i class="fa fa-home"></i><span>Medications</span></a></li>
            <li><a href="<?= base_url();?>index.php/demo"><i class="fa fa-home"></i><span>Smart Card</span></a></li>
            <li><a href="<?= base_url();?>index.php/demo"><i class="fa fa-home"></i><span>Reports</span></a></li>
            <li><a href="<?= base_url();?>index.php/demo"><i class="fa fa-home"></i><span>Blood Availability</span></a></li>
            <li><a href="<?= base_url();?>index.php/demo"><i class="fa fa-home"></i><span>Billing</span></a></li>
            <li><a href="<?= base_url();?>index.php/demo"><i class="fa fa-home"></i><span>To-Do list</span></a></li>            
          </ul><!-- /.sidebar-menu -->
        </section>
        </aside>
