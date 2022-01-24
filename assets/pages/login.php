<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/icons/bootstrap-icons.css" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="assets/images/nyosmed2.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- APP CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/logo.css">
</head>

<body>
<!-- <div class="container"> -->
        <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
 
           <div class="container">
               <div class="main-container">
            <div class="main-content">
                <div class="slide-container" style="background-image: url(assets/images/phone-frame9.png);">
                <div class="slide-content" id="slide-content">
                        <img src="assets/images/slide (1).jpg" alt="slide image" class="active">
                        <img src="assets/images/slide (2).jpg" alt="slide image">
                        <img src="assets/images/slide (3).jpg" alt="slide image">
                        <img src="assets/images/slide (4).jpg" alt="slide image">
                        <img src="assets/images/slide (5).jpg" alt="slide image">
                    </div>
                </div>
                <form method="post" action="assets/php/actions.php?login">
                <div class="form-container">
                <img src="assets/images/rm3.png" width="350px" height="100px">
                <div class="box">
           <div class="square" style="--i:0"></div>
           <div class="square" style="--i:1"></div>
           <div class="square" style="--i:2"></div>
           <div class="square" style="--i:3"></div>
           <div class="square" style="--i:4"></div>    
                <div class="form-content box">
                        <div class="logo">
                            <!-- <img src="assets/images/logo-light1.png" alt="Instagram logo" class="logo-light">
                            <img src="assets/images/logo-dark1.png" alt="Instagram logo" class="logo-dark"> -->
                            <svg viewBox="0 0 300 100">
            <text id="mytext" x="50%" y="50%" text-anchor="middle" fill="none">NyosMed</text>
            <use xlink:href="#mytext" class="copy copy1"></use>
            <use xlink:href="#mytext" class="copy copy2"></use>
            <use xlink:href="#mytext" class="copy copy3"></use>
            <use xlink:href="#mytext" class="copy copy4"></use>
            <use xlink:href="#mytext" class="copy copy5"></use>
        </svg>
                        </div>
                        
                        <div class="signin-form" id="signin-form">

                            <form action="login.php" method="post">
                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        Phone number, username or email
                                    </span>
                                    <input type="text" name="username_email" value="<?=showFormData('username_email') ?>" class="form-control rounded-0">
                                </div>
                                <?=showError('username_email')?>
                            </div>
                            <br/>
                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        Password
                                    </span>
                                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword">
                                    <button type="button">Show</button>
                                </div>
                                <?=showError('password')?>
                                <?=showError('checkuser')?>
                            </div>
                            <br/>
                            <div class="btn-group">
                                <button class="btn-login" id="signin-btn" disabled>
                                    Log In
                                </button>
                            </div>
                        </div>
                        </form>
                            <div class="divine">
                                <div></div>
                                <div>OR</div>
                                <div></div>
                            </div>
                            <a href="?lupapassword" class="forgot-pw" style="text-decorations:none; color:inherit;">Lu Lupa Password? Klik Sini Ngabs</a>
                        </div>
                    </div>
                    <div class="box goto">
                        <p>
                            Loe Gx Punya Akun!?
                            <a href="?daftar">DAFTAR NGABS!!</a>
                        </p>
                    </div>
</div>
                    </form>         
                </div>
    </div>
    <div class="footer">
            <div class="links">
                
                <a href="#" id="darkbutton">Darkmode</a>
            </div>
            <div class="copyright">
                @JAMET
            </div>
    </div>
</div>
    </div>
</div>      
</section>
    <script src="assets/js/app.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>