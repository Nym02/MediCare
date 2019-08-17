<?php


require '../includes/dbh.inc.php';

if(isset($_POST['uname'])){
    // $uid = mysqli_real_escape_string($conn,)
    $sql = "SELECT * FROM users where uname = '".$_POST['user_name']."'";
    $result = mysqli_query($conn,$result);
    if(mysqli_num_rows($result)>0){
        echo '<span class="text-danger">Username not available</span> ';
    }
    else{
        echo '<span class="text-success">Username available</span> ';
    }
}