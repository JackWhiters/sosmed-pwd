<?php 
include('../php/admin_functions.php');
if(isset($_SESSION['admin_auth'])) header('Location:../');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel | Log in</title>
  <link rel="shortcut icon" href="../../assets/images/nyosmed2.png" type="image/png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="../dist/css/app.css">
  <link rel="stylesheet" href="../../assets/css/logo.css">
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body>
<!-- <div class="container"> -->
        <section>

           <div class="container">
               <div class="main-container">
            <div class="main-content">
                
                <form action="../php/admin_actions.php?login" method="post">
                <div class="form-container">


                <div class="box">
           <div class="square" style="--i:0"></div>
           <div class="square" style="--i:1"></div>
           <div class="square" style="--i:2"></div>

             
                <div class="form-content">
                    
                <center>
                <svg viewBox="0 0 300 100">
            <text id="mytext" x="50%" y="50%" text-anchor="middle" fill="none">NyosMed</text>
            <use xlink:href="#mytext" class="copy copy1"></use>
            <use xlink:href="#mytext" class="copy copy2"></use>
            <use xlink:href="#mytext" class="copy copy3"></use>
            <use xlink:href="#mytext" class="copy copy4"></use>
            <use xlink:href="#mytext" class="copy copy5"></use>
        </svg>
        
                <p class="login-box-msg">ini Khusus Admin NGABS</p></center>
                        <div class="signin-form" id="signin-form">
                        <?=showError('useraccess')?>
                        <form action="../php/admin_actions.php?login" method="post">
                            <div class="form-group">
                                <div class="animate-input">
                                    <span class="fas fa-envelope">
                                       Email
                                    </span>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="animate-input">
                                    <span class="fas fa-lock">
                                        Password
                                    </span>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>
                           
          
            <div class="form-group" style=" border:none">
              <input type="checkbox" id="remember">
              <label class="form-check-label">
                            Ingat Aku </label>
            </div>
          
                            <div class="btn-group">
                                <button class="btn-login" id="signin-btn" disabled>
                                    Log In
                                </button>
                            </div>
                        </div>
                        </form>
                               
                </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="footer">

            <div class="links">
                
                <a href="#" id="darkbutton">Darkmode</a>
            </div>
            <div class="copyright">
                @Kelompok 12 - PWD
            </div>
    </div>
</div>
    </div>
</div>      
</section>
    <script src="../../assets/js/app.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>

</html>
<?php

if(isset($_SESSION['error'])){
  unset($_SESSION['error']);

}
?>