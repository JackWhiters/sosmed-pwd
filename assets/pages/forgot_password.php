
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="assets/images/nyosmed2.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- APP CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
</head>
<body>
<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>    

    <div class="container">
    <div class="main-container">
            <div class="main-content">
            
        <?php
                if(isset($_SESSION['lupa_code']) && !isset($_SESSION['auth_temp']))
                {
                    $action = 'verifycode';
                }
                elseif(isset($_SESSION['lupa_code']) && isset($_SESSION['auth_temp']))
                {
                    $action = 'ubahpassword';
                }
                else
                {
                    $action = 'lupapassword';
                }
                ?>

       
            <form method="post" action="assets/php/actions.php?<?=$action?>">
            <div class="form-container">
             <div class="box">
            
                               

               <div class="form-content">
                <h1 class="h5 mb-3 fw-normal">Forgot Your Password ?</h1>

                <?php
                if($action=='lupapassword')
                {
                    ?>
                       <div class="form-group">
                         <div class="animate-input">
                         <span >Masukkan Email</span>
                         <input type="email" name="email" class="form-control rounded-0" >
                        </div>
                </div>
                        <?=showError('email');?>
                        <br>
                        <button class="btn btn-primary" type="submit">Send Verification Code</button>

                    <?php
                
                }
                ?>

                <?php
                if($action=='verifycode')
                {
                    ?>
                        <p>masukan kode verifikasi,<?=$_SESSION['lupa_email'] ?></p>
                        <div class="form-floating mt-1">
                        <input type="text" name="code" class="form-control rounded-0" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">######</label>
                        <?=showError('email_verify');?>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit" href="forgot_password.php">Verify Code</button>
                    <?php   
                }
                ?>
                
                <?php
                if($action=='ubahpassword')
                {
                    ?>
                    <p>Masukkan Password Baru,<?=$_SESSION['lupa_email'] ?></p>
                    <div class="form-group">
                    <div class="animate-input">
                    <span> Password baru </span>
                    <input type="password" name='password' class="form-control rounded-0" id="floatingPassword">
                    <?=showError('password');?>
                </div>
                </div>
                    <br>
                    <button class="btn btn-primary" type="submit">Ubah Password</button>
                    <?php
                    
                }
                ?>
             

                <br>
                <br>
                <a href="?login" class="text-decoration-none mt-5"><i class="bi bi-arrow-left-circle-fill"></i> Go Back
                    To
                    Login</a>
            </div>
            </div>
            </div>
            </form>
        </div>
    </div>
    <div class="footer">
            <div class="links">
                
                <a href="#" id="darkmode-toggle">Darkmode</a>
            </div>
            <div class="copyright">
                @JAMET
            </div>
    </section>
    <script src="assets/js/app.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

