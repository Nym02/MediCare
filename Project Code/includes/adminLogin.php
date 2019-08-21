<?php 
session_start();
if(isset($_POST['submit'])){

    include_once"dbh.inc.php";

    $adminMail = $_POST['adminEmail'];
    $pass = $_POST['adminPassword'];

    if(empty($adminMail) || empty($pass)){
        header("Location:../Alogin.php?error=emptyField");
        exit();
    }
    else{
        $sql = "SELECT * FROM admins WHERE adminUserName =? OR adminEmail =?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../Alogin.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$adminMail,$adminMail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($pass,$row['adminPassword']);
                if($pwdCheck == false){
                    header("Location: ../Alogin.php?error=wrongpassword");
                    exit();
                }
                else if($pwdCheck == true){
                    session_start();
                    $_SESSION['ID']= $row['adminId'];
                    $_SESSION['adminname']= $row['adminUserName'];
                    header("Location: ../adminHome.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../Alogin.php?error=wrongpassword");
                    exit();
                }
            }
        }
    }

} 
else {
    header("Location:../login.php?error=doingNothing");
    exit();
}