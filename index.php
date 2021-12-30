<?php
require_once 'assets/php/functions.php';



// if(isset($_GET['daftar']))
// {
//     showPage('header',['page_title'=>'Social media - Daftar']);
//     showPage('daftar');

// }
// else if(isset($_GET['login']))
// {
//     showPage('header',['page_title'=>'Social media - Login']);
//     showPage('login');    
// }
// echo "<pre>";
// print_r(getPost());

//untuk mengunset lupa password
if(isset($_GET['newfp']))
{
    unset($_SESSION['auth_temp']);
    unset($_SESSION['lupa_email']);
    unset($_SESSION['lupa_code']);
}
//Level User ditaro setelah menggunakan PHPMailer
if(isset($_SESSION['Auth'])) {
    $user = getUser($_SESSION['userdata']['id']);
    $posts = getPost();
    //untuk saran follow
    $saran_follow = filterFollowSuggestion();
}

$pagecount = count($_GET);

// ROUTES atau manajement page
if(isset($_SESSION['Auth']) && $user['ac_status']==1 && !$pagecount)
{
    // echo "Pengguana Telah Login";
    // $userdata = $_SESSION['userdata'];
    // echo "<pre>";
    // print_r($userdata);
    showPage('header',['page_title'=>'Social media - Home']);
    showPage('navbar');
    showPage('wall');

}
elseif(isset($_SESSION['Auth']) && $user['ac_status']==0  && !$pagecount)
{
    showPage('header',['page_title'=>'Social media - Verifikasi Email']);
    showPage('verify_email');
}
elseif(isset($_SESSION['Auth']) && $user['ac_status']==2  && !$pagecount)
{
    showPage('header',['page_title'=>'Social media - Blokir']);
    showPage('blocked');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['editprofile']) && $user['ac_status']==1)
{
    showPage('header',['page_title'=>'Social media - Edit Profile']);
    showPage('navbar');
    showPage('edit_profile');
}
elseif(isset($_SESSION['Auth']) && isset($_GET['u']) && $user['ac_status']==1)
{
    $profile = getUserByUsername($_GET['u']);
    // print_r($profile);
    if(!$profile){
        showPage('header',['page_title'=>'Social media - User Tidak Ditemukan']);
        showPage('navbar');
        showPage('user_tidak_ditemukan');
    }
    else {
        $profile_post = getPostById($profile['id']);
        // print_r($profile_post);
        showPage('header',['page_title'=>$profile['first_name'].' '.$profile['last_name']]);
        showPage('navbar');
        showPage('profile');
    }

}
elseif(isset($_GET['daftar']))
{
    showPage('header',['page_title'=>'Social media - Daftar']);
    showPage('daftar');

}
else if(isset($_GET['login']))
{
    showPage('header',['page_title'=>'Social media - Login']);
    showPage('login');    
}
else if(isset($_GET['lupapassword']))
{
    showPage('header',['page_title'=>'Social media - Lupa Password']);
    showPage('forgot_password');    
}
else
{
    if(isset($_SESSION['Auth']) && $user['ac_status']==1)
    {
        showPage('header',['page_title'=>'Social media - Home']);
        showPage('navbar');
        showPage('wall');
    }
    elseif(isset($_SESSION['Auth']) && $user['ac_status']==0)
    {
    showPage('header',['page_title'=>'Social media - Verifikasi Email']);
    showPage('verify_email');
    }
    elseif(isset($_SESSION['Auth']) && $user['ac_status']==2 )
    {
    showPage('header',['page_title'=>'Social media - Blokir']);
    showPage('blocked');
    }
    else
    {
        showPage('header',['page_title'=>'Social media - Login']);
        showPage('login'); 
    }
  
}


showPage('footer');
unset($_SESSION['error']);
unset($_SESSION['formdata']);
?>