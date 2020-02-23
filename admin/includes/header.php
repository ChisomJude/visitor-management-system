<?php 
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['level'])){
          ?>
    <script type="text/javascript">
    window.location.href = "http://localhost/gtb/admin/index.php?msg=Session_check_failed,Please_login";
    </script>
    <?php
          }

    $id=$_SESSION['id'];
    $name= $_SESSION['name'];
    $level = $_SESSION['level'];
    $last_login  = $_SESSION['last_login'];
              
            
    require "includes/dbcon.php";
 
 function get_userip(){
  //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   
    {
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
    {
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address
    else
    {
      $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    return $ip_address;
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GTB | Visitor Management System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <script type='text/javascript' language='javascript'>
  function signbage(hashid) {
    windowObjectReference = window.open(
      "print_visitor_badge.php?cid=" + hashid + "&action=allow_usr&decode=6767676gh5662684de61a08888",
      "DescriptiveWindowName",
      "width=650,height=500,resizable,scrollbars,status"
    );
  }
</script>
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed accent-orange">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-orange">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="color:white" >
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="profile.php" class="nav-link">My Profile</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3" method="post" action="search.php" >
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search Visitors by name" name="search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" style="color:#ffffff" href="logout.php"><b> <?php echo $name ?> Logout?
          <i class="fa fa-power-off 2x"></i></b>
        </a>
       
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-orange elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link elevation-4 navbar-light">
      <img src="../img/logo.jpg"
           alt="GTB | VMS"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">GTB | VMS </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $name ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Visitors 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="visitors.php" class="nav-link">
                  <i class="fa fa-chevron-right nav-icon"></i>
                  <p>Visitors list</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="new_visitor.php" class="nav-link">
                  <i class="fa fa-chevron-right nav-icon"></i>
                  <p>Sign-In New Visitors</p>
                </a>
              </li>
             
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
               My Profile
              </p>
            </a>
          </li>
            <?php if($level==1){?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-users-cog"></i>
              <p>
                Admin Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="users.php" class="nav-link">
                   <i class="far fa-address-card nav-icon"></i>
                  <p>User list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="add_user.php" class="nav-link">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="staff.php" class="nav-link">
                  <i class="far fa-address-card nav-icon"></i>
                  <p>All Staff</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="add_staff.php" class="nav-link">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Add Staff</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa  fa-cogs"></i>
              <p>
                System 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="log.php" class="nav-link">
                  <i class="fa fa-book nav-icon"></i>
                  <p>Logs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="files.php" class="nav-link">
                  <i class="fa fa-book nav-icon"></i>
                  <p>Export Files</p>
                </a>
              </li>

              
            </ul>
          </li>
            <?php }?>
          <li class="nav-item ">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>
              </p>
             </a>
          </li>
            
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 