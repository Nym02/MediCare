<?php
include_once "includes/dbh.inc.php";
if (isset($_POST['submit'])) {


    $fullName = $_POST['fullName'];
    $userName = $_POST['uname'];
    $userEmail = $_POST['uemail'];
    $userPassword = $_POST['upass'];
    $userPhone = $_POST['uphone'];
    $userImg = $_FILES['imgUpload'];


    $folder = "uploads/";
    $userImgName = $_FILES['imgUpload']['name'];
    $userImgTmpName = $_FILES['imgUpload']['tmp_name'];
    $targetFile = $folder . $userImgName;
    move_uploaded_file($userImgTmpName, $folder);


    $checkSql = "SELECT userName FROM users WHERE userName = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $checkSql)) {
        header('Location: signup.php?error=sqlerror2');
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, 's', $userName);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
            header('Location: signup.php?error=usernameExist&mail=' . $userEmail);
            exit();
        } else {
            $sql = "INSERT INTO users(userFullName, userName, userEmail, userPassword, userPhone, userImg)  VALUES (?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header('Location: signup.php?error=sqlerror');
                exit();
            } else {
                $hashPassword = password_hash($userPassword, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, 'ssssss', $fullName, $userName, $userEmail, $hashPassword, $userPhone, $targetFile);
                mysqli_stmt_execute($stmt);
                header('Location: signup.php?signup=success');
                exit();
            }
        }
    }




    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    header('Location: ../signup.php');
    exit();
}
