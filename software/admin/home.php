<?php
session_start();
include "../depend/database.php";
if(!isset($_SESSION['admin_id'])){
    header('location:login.php');
}else{
    //collect data for students
    $admin_id= $_SESSION["admin_id"];
    $query= "SELECT * FROM admin WHERE admin_id = '{$admin_id}' ";
    $result=mysqli_query($db_connc,$query);
    $row=mysqli_fetch_assoc($result);

    $fname = $row["firstname"];
    $lname = $row["lastname"];
    $mname = $row["middlename"];
    $role = $row["role"];
    $address = $row["address"];
    $gender = $row["sex"];
    $dob = $row["dob"];
    $username = $row["username"];
}
?>
<!DOCTYPE html>
<html lang="en" style="height: auto;"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Admin | Home</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="notify.php" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">iSchool<b>Soft</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $row['firstname']." ".$row['lastname'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="admin.php" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Admin
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="student.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Students
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="teacher.php" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Teacher
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="result.php" class="nav-link ">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Results
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="assign.php" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Announcement
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="notify.php" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>
                Notifications
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="testmonial.php" class="nav-link">
              <i class="nav-icon fas fa-scroll"></i>
              <p>
                Testmonial
              </p>
            </a>
          </li>







        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 387px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bio Data</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $row['firstname']." ".$row['lastname']." ".$row['middlename'];?></h3>

                <p class="text-muted text-center"><?php echo "VICTADM".$row['admin_id'];?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>AGE</b> <a class="float-right">34</a>
                  </li>
                  <li class="list-group-item">
                    <b>SEX</b> <a class="float-right"><?php echo $row['sex'];?></a>
                  </li>
                  <li class="list-group-item">
                    <b>DATE OF BIRTH</b> <a class="float-right"><?php echo $row['dob'];?></a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>REFRESH</b></a>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-user mr-1"></i> ROLE</strong>

                <p class="text-muted">
                <?php echo $row['role'];?>
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> HOME ADDRESS </strong>

                <p class="text-muted"><?php echo $row['address'];?></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> SUBJECTS</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">GENERAL CLASS TEACHER</span>
                </p>

                <hr>

              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright © 2021 <a href="">TechStein.io</a>.</strong> All rights reserved.
  </footer>
<div id="sidebar-overlay"></div></div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


</body></html>
