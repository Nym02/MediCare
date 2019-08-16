<?php 






    $userID = $_SESSION['username'];
    $query = "SELECT * from users where userFullname = '$userID'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);

    $id = $row['userID'];
    
    if(isset($_POST['submit'])){
        require"dbh.inc.php";
    
        $fullName = $_POST['fullName'];
        $docDate = $_POST['docDate'];
        $docTime = $_POST['docTime'];
        $userEmail = $_POST['uemail'];
        $userPhone = $_POST['uphone'];
        $userDescription = $_['docDescription'];
        
    
    
        $sql = "INSERT INTO users(user_fullname, 	docDate, 	docTime, 	userEmail, 	userPhone, 	userDescription,user_ID)  VALUES (?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            // header('Location: ../signup.php?error=sqlerror');
            // exit();
        }
        else{
            
            mysqli_stmt_bind_param($stmt,'ssssssi',$fullName,$docDate,$docTime,$userEmail,$userPhone,$userDescription,$id);
            mysqli_stmt_execute($stmt);
            // mysqli_stmt_store_result($stmt);
            header('Location: ../appointment.php?appointment=success');
            exit();
        }
    
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    
    }
    else{
        header('Location: ../signup.php');
            exit();
    }
    
    
}
