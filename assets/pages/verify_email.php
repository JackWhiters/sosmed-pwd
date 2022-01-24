<?php
global $user;

?>
<!DOCTYPE html>
<html lang="en">
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
            <form method="post" action="assets/php/actions.php?verify_email">   
            <div class="form-container">
            <div class="box"> 
            <div class="form-content">
                <h1 class="h5 mb-3 fw-normal">Verifikasi Email Kamu (<?=$user['email'] ?>)</h1>


                <p>Enter 6 Digit Code Sended to You</p>
                <div class="form-group">
                         <div class="animate-input">
                         <span >######</span>
                    <input type="text" name="code" class="form-control rounded-0" id="floatingPassword">
                    
                </div>
                </div>
    
                <?php
                if(isset($_GET['resended']))
                    {
                     ?>
                     <p class="text-success">Kode Verifikasi Telah Dikirim Ulang! </p>
                     <?php
                    }
                ?>
                <?=showError('email_verify');?>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <button class="btn btn-primary" type="submit">Verifikasi Email</button>
                    <a href="assets/php/actions.php?resend_code" class="text-decoration-none" type="submit">Kirim Ulang Kode</button>





                </div>
                <br>
                <a href="assets/php/actions.php?logout" class="text-decoration-none mt-5"><i class="bi bi-arrow-left-circle-fill"></i>
                    Logout</a>
                </div>
                </div>
            </form>
                </div>
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