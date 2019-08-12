<?php 

if(isset($_POST['submit'])){
    require"dbh.inc.php";

    $fullName = $_POST['fullName'];
    $userName = $_POST['uname'];
    $userEmail = $_POST['uemail'];
    $userPassword = $_POST['upass'];


    $sql = "INSERT INTO users(userFullName, userName, userEmail, userPassword)  VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);



}

