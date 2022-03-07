<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>iSchoolSoft | Install </title>

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
    iSchool<b>Software</b>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
        <?php
        if(isset($_SESSION['err'])){
           echo '<p class="login-box-msg" style="color:red; margin-bottom:15px; font-size:20px;" >'.$_SESSION['err'].'</p>';
        }
        ?>
      <p class="login-box-msg">Install For New User</p>

      <form action="process.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="School name" name="school_name" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-school"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="School admin" name="school_admin">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password1" id="password1">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password2" id="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span style="color:red; font-size:small; margin-bottom:10px; display:none" id="warning">passwords do not match</span>
        <div class="input-group mb-3">
        <p class="login-box-msg">Database Settings</p>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Database Host" name="db_host" onclick="checkpassword()">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-server"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Database User" name="db_user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Database password" name="db_passwd">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Database Name" name="db_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" onclick="document.getElementsByTagName('button')[0].removeAttribute('disabled')">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit" disabled="">Install</button>
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


</body></html>