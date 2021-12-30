<?php
require_once 'functions.php';

if(isset($_GET['follow'])) {
    $user_id = $_POST['user_id'];
    if(followUser($user_id)) {
    // if(true) {
        $response['status'] = TRUE;
    } else {
        $response['status']= FALSE;
    }

    echo json_encode($response);
}

if(isset($_GET['unfollow'])) {
    $user_id = $_POST['user_id'];
    if(unfollowUser($user_id)) {
    // if(true) {
        $response['status'] = TRUE;
    } else {
        $response['status']= FALSE;
    }

    echo json_encode($response);
}


?>