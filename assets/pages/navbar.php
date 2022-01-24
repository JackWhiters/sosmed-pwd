<?php global $user;?>
    <link href="assets/css/style.css" rel="stylesheet">
    <script defer src="assets/js/script.js"></script>
<!-- <div class="video-bg">
 <video width="320" height="240" autoplay loop muted>
  <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
Your browser does not support the video tag.
</video> -->
</div>
<div class="dark-light" id="darkbutton">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
     <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
   </div>
<div class="app">
 <div class="header">
  <div class="menu-circle"></div>
  <div class="header-menu">
   <a class="menu-link is-active" href="?">Beranda</a>
   <a class="menu-link" href="?mading">Mading</a>
   <a class="menu-link" href="#"></a>
   <a class="menu-link" href="#"></a>
  </div>
  <div class="search-bar">
               <form class="d-flex" id="searchform">
                    <input class="form-control me-2" type="search" id="search" placeholder="Cari.."
                        aria-label="Search">
                     <div class="warna white text-end rounded border shadow py-3 px-4 mt-5" style="display:none;position:absolute;z-index:+99;" id="search_result" data-bs-auto-close="true">
                        <button type="button" class="btn-close" aria-label="Close" id="close_search"></button>
                        <div id="sra" class="text-start">
                            <p class="text-center text-muted">Masukkan Nama Atau Username</p>
                        </div>
                      </div>
                </form>
  </div>
<div class="header-profile">
    <nav class="navbar navbar-expand-lg">
                <a class="nav-item">
                    <a class="nav-link text-secondary" href="?"><i class="bi bi-house-door-fill"></i></a>
                </a>
                <a class="nav-item">
                    <a class="nav-link text-secondary" data-bs-toggle="modal" data-bs-target="#addpost" href="#"><i class="bi bi-plus-square-fill"></i></a>
                </a>
                <a class="nav-item">
                    <?php
                        if(getUnreadNotificationsCount()>0){
                    ?>
                <a class="nav-link text-secondary position-relative" id="show_not" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample">
                    <i class="bi bi-bell-fill"></i>
                    <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger">
                        <small><?=getUnreadNotificationsCount()?></small>
                    </span>
                </a>

                <?php
                }else{
                ?>
                    <a class="nav-link text-secondary" data-bs-toggle="offcanvas" href="#notification_sidebar" role="button" aria-controls="offcanvasExample"><i class="bi bi-bell-fill"></i></a>
                <?php
                }
                ?>
                </a>
                <a class="nav-item">
                    <a class="nav-link text-secondary" data-bs-toggle="offcanvas" href="#message_sidebar" href="#"><i class="bi bi-chat-right-dots-fill"></i>                    
                        <span class="un-count position-absolute start-10 translate-middle badge p-1 rounded-pill bg-danger" id="msgcounter">
                            
                        </span>
                    </a>
                    <li class="nav-item dropdown" style="margin-top:50px;display:flex;flex:1;margin-right:33px">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/profile/<?=$user['profile_pic']?>" alt="" max-height="40px" max-width="40px" class="rounded-circle border profile-img">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="?u=<?=$user['username']?>"><i class="bi bi-person"></i> Profil Aqu</a></li>

                        <li><a class="dropdown-item" href="?editprofile"><i class="bi bi-pencil-square"></i> Edit Profil Qu</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Akun Settings</a></li>
                        <li><a class="dropdown-item" href="assets/php/actions.php?logout"><i class="bi bi-box-arrow-in-left"></i> Keluar</a></li>
                    </ul>
                </a>
    </nav>
</div>
</div>