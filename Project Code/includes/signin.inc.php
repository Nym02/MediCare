<?php 
session_start();
if(isset($_POST['submit'])){

    include_once"dbh.inc.php";

    $userMail = $_POST['userEmail'];
    $pass = $_POST['userPassword'];

    if(empty($userMail) || empty($pass)){
        header("Location:../login.php?error=emptyField");
        exit();
    }
    else{
        $sql = "SELECT * FROM users WHERE userName =? OR userEmail =?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt,"ss",$userMail,$userMail);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($pass,$row['userPassword']);
                if($pwdCheck == false){
                    header("Location: ../login.php?error=wrongpassword");
                    exit();
                }
                else if($pwdCheck == true){
                    session_start();
                    $_SESSION['ID']= $row['userID'];
                    $_SESSION['username']= $row['userName'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
                else{
                    header("Location: ../login.php?error=wrongpassword");
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