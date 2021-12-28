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


//Level User ditaro setelah menggunakan PHPMailer
if(isset($_SESSION['Auth'])) {
    $user = getUser($_SESSION['userdata']['id']);
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