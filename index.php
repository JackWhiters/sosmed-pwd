<?php
require_once 'assets/php/functions.php';


if(isset($_GET['daftar']))
{
    showPage('header',['page_title'=>'Social Media - Daftar']);
    showPage('daftar');
}

elseif(isset($_GET['login']))
{
    showPage('login');
    showPage('header',['page_title'=>'Social Media - Login']);
    
}

showPage('footer');

?>