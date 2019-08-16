<?php 

if(isset($_POST['submit'])){
    require"dbh.inc.php";

    $fullName = $_POST['fullName'];
    $userName = $_POST['uname'];
    $userEmail = $_POST['uemail'];
    


    $sql = "INSERT INTO users(userFullName, userName, userEmail, userPassword)  VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../signup.php?error=sqlerror');
        exit();
    }
    else{
        
        mysqli_stmt_bind_param($stmt,'ssss',$fullName,$userName,$userEmail);
        mysqli_stmt_execute($stmt);
        // mysqli_stmt_store_result($stmt);
        header('Location: ../signup.php?signup=success');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else{
    header('Location: ../signup.php');
        exit();
}

