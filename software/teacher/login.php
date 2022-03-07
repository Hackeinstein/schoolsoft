<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teacher | Login</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <script>
      function  checkpassword() {  
     var password1=document.getElementById('password1').value;
     var password2=document.getElementById('password2').value;
     if (password1 != password2){
        document.getElementById('password1').classList.add("is-invalid");
        document.getElementById('password2').classList.add("is-invalid");
        document.getElementById("warning").style.display = "inline";
    }else{
        document.getElementById('password1').classList.remove("is-invalid");
        document.getElementById('password2').classList.remove("is-invalid");
        document.getElementById("warning").style.display = "none";
    }
    }


    </script>
</head>
<body class="register-page" style="min-height: 570.781px;">
<div class="register-box">
  <div class="register-logo">
    iSchool<b>Soft</b> <span style="color: green;"><b>Teacher</b></span>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
        <?php
        if(isset($_SESSION['err'])){
           echo '<p class="login-box-msg" style="color:red; margin-bottom:15px; font-size:20px;" >'.$_SESSION['err'].'</p>';
           unset($_SESSION['err']);
        }
        ?>
      <p class="login-box-msg">Login in to Suite</p>

      <form action="process.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="teacher_user" required="required" id="form">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="teacher_pass" required="required" id="form">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      

        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="teacher_login" >Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


</body>
</html>