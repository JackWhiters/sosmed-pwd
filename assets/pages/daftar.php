<?php
//print_r($_SESSION['error']);
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
    <title>Daftar</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="assets/images/nyosmed2.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- APP CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/logo.css">
</head>

<body>
     <section>
     <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
<div class="container">
        <div class="main-container">
            <div class="main-content">
                <div class="slide-container" style="background-image: url(assets/images/phone-frame9.png);">
                <div class="slide-content" id="slide-content">
                        <img src="assets/images/1.jpeg" alt="slide image" class="active">
                        <img src="assets/images/2.jpeg" alt="slide image">
                        <img src="assets/images/3.jpeg" alt="slide image">
                        <img src="assets/images/slide (4).jpg" alt="slide image">
                        <img src="assets/images/slide (5).jpg" alt="slide image">   
                    </div>
                </div>
                <div class="main-content">
                <form method="post" action="assets/php/actions.php?daftar">
                <div class="form-container">
                    <div class="box">
           <div class="square" style="--i:0"></div>
           <div class="square" style="--i:1"></div>
           <div class="square" style="--i:2"></div> 
                <!-- <img src="assets/images/rm3.png" width="350px" height="100px"> -->
                    <div class="form-content">                        
                        <div class="logo">
                            <!-- <img src="assets/images/logo-light1.png" alt="Instagram logo" class="logo-light">
                            <img src="assets/images/logo-dark1.png" alt="Instagram logo" class="logo-dark"> -->
                            <svg viewBox="0 0 290 90">
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
                                        Nama Depan
                                    </span>
                                    <input type="text" name="first_name" value="<?=showFormData('first_name') ?>" class="form-control rounded-0">
                                </div>
                            </div>
                            <?=showError('first_name')?>
                            <br/>

                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        Nama Belakang
                                    </span>
                                    <input type="text" name="last_name" value="<?=showFormData('last_name') ?>" class="form-control rounded-0">
                                </div>
                                </div>
                            <?=showError('last_name')?>
                            <br/>
 
                            <div class="form-group" style=" border:0">
                            <label class="form-check-label">
                            Jenis Kelamin </label>
                            <div class="d-flex gap-3 my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1"
                            value="1" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==1?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios1" >
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios3"
                            value="2" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==2?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios3">
                            Wanita
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2"
                            value="0" <?=isset($_SESSION['formdata'])?'':'checked'?><?=showFormData('gender')==0?'checked':''?>>
                        <label class="form-check-label" for="exampleRadios2">
                            Rahasia
                        </label>
                        </div>
                    </div>
                    </div>        
                    <br/>   
                    <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        Email
                                    </span>
                                    <input type="email" name="email" value="<?=showFormData('email') ?>" class="form-control rounded-0">
                                </div>
                            </div>
                            <?=showError('username')?>
                            <br/>
                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        Username
                                    </span>
                                    <input type="text" name="username" value="<?=showFormData('username') ?>" class="form-control rounded-0">
                                </div>
                            </div>
                            <?=showError('email')?>
                            <br/>
                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        Password
                                    </span>
                                    <input type="password" name="password" class="form-control rounded-0" id="floatingPassword">
                                    <button type="button">LIHAT</button>
                                </div>
                            </div>
                            <?=showError('password')?>
                            <br/>
                            <div class="btn-group">
                                <button class="btn-login" >
                                    Daftar
                                </button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="box goto">
                        <p>
                            SUDAH PUNYA AKUN?
                            <a href="?login">AYO LOGIN!!</a>
                        </p>
                    </div>
                    </div>
                    </div>
                    </form>
        </div>
        </div>
        <br/>
        <div class="footer">
            <div class="links"> 
                <a href="#" id="darkbutton">Darkmode</a>
            </div>
            <div class="copyright">
                @Kelompok 21 - PWD
            </div>    
        </div>
    </div>
</section>
    <script src="assets/js/app.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>