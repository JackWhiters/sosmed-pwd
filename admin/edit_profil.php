<?php
$function_url="../assets/php/functions.php";
include('./php/admin_functions.php');
if(!isset($_SESSION['admin_auth'])) header('Location:./pages/login.php');
$admin = getAdmin($_SESSION['admin_auth']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NYOSMED | Dashboard</title>
    <link rel="shortcut icon" href="../assets/images/nyosmed2.png" type="image/png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- material CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../assets/images/nyosmed2.png">
                    <h2>NYO<span class="primary">SMED</span></h2> 
                </div>
                <div class="close" id="close-btn">
                <span class="material-icons-sharp">close</span>
                </div>
            </div>

            <div class="sidebar" >
                <a href="#" class="active">
                <span class="material-icons-sharp">grid_view</span>
                <h3>Dashboard</h3> 
                </a>
                <a href="edit_profile.php" >
                <span class="material-icons-sharp">account_circle</span>
                <h3>Edit Profil</h3> 
                </a>
                <a href="php/admin_actions.php?logout">
                <span class="material-icons-sharp">logout</span>
                <h3>Keluar</h3> 
                </a>
            </div>
        </aside>
        <!-- penutup sidebar -->

        <main>
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                <span class="material-icons-sharp">menu</span>   
                </button>
                <div class="theme-toggler" id="darkbutton">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hai,<b>Admin</b></p>
                    </div>
                </div>
            </div>    
        <h1>Dashboard</h1>

            <div class="insights">
                <div class="pengguna">
                <span class="material-icons-sharp">people</span>
                <div class="middle">
                    <div class="lef">
                        <h2>Total Pengguna :    <?=totalUsersCount()?></h2>
                    </div>
                </div>
                </div>
                <!-- penutup pengguna -->

                <div class="posting">
                <span class="material-icons-sharp">bar_chart</span>
                <div class="middle">
                    <div class="lef">
                        <h2>Total Postingan :   <?=totalPostsCount()?></h2>
                    </div>
                </div>
                </div>
                <!-- penutup postingan -->

                <div class="comment">
                <span class="material-icons-sharp">stacked_line_chart</span>
                <div class="middle">
                    <div class="lef">
                        <h2>Total komentar  : <?=totalCommentsCount()?></h2>
                    </div>
                </div>
                </div>
                <!-- penutup komentar -->
                
                <div class="like">
                <span class="material-icons-sharp">favorite</span>
                <div class="middle">
                    <div class="lef">
                        <h2>Total likes :   <?=totalLikesCount()?></h2>
                        
                    </div>
                </div>
                </div>
                <!-- penutup likes -->
            </div>
            <!-- penutup insights -->

            <div class="user-list">
                <h2>User List</h2>
                <?php
$userslist = getUsersList();
$count=1;
                ?>
                <table>
                    <thead>
                        <tr>
                            <th width="10%">#No</th>
                            <th width="45%">User</th>
                            <th width="20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
foreach($userslist as $user){
  ?>
   <tr>
                    <td>#<?=$count?></td>
                    <td>
                      <div class="d-flex">
                        <div>
                          <img src="../assets/images/profile/<?=$user['profile_pic']?>" class="rounded-circle border border-2 shadow-sm mx-2" width="55px" height="55px" />
                        </div>
                        <div>
                          <h5><?=$user['first_name'].' '.$user['last_name']?> - <span class="text-muted">@<?=$user['username']?></span></h5>
                          <h6 class="text-muted"><?=$user['email']?></h6>


                        </div>
</div>
                    </td>

                    <td>
                      
                     
                    <a href="./php/admin_actions.php?userlogin=<?=$user['email']?>" target="_blank" class="btn btn-success btn-sm m-1">Login User</a>
                    
                    <?php if($user['ac_status']==0): ?><button class="m-1 btn btn-warning btn-sm verify_user_btn" data-user-id="<?=$user['id']?>">Verify</button><?php endif; ?>
                     
                      
                        <button style="display:<?=$user['ac_status']==1?'':'none'?>" class="m-1 btn btn-danger btn-sm block_user_btn ub" data-user-id="<?=$user['id']?>">Block</button>
                        <button style="display:<?=$user['ac_status']==2?'':'none'?>" class="m-1 btn btn-primary btn-sm unblock_user_btn" data-user-id="<?=$user['id']?>">Unblock</button>
       
                      

                    </td>
                 
                  </tr>
  <?php
  $count++;
}
                  ?>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- -----penutup main class------ -->
            <!-- -----penutup page admin----- -->
        </div>

    </div>

    <script src="dist/js/pages/index.js"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->





<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="js/actions.js?v=<?=time()?>"></script>
</body>
</html>
<?php

if(isset($_SESSION['error'])){
  unset($_SESSION['error']);

}
?>