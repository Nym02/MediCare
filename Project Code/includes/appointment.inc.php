<?php 

session_start();

include_once "dbh.inc.php";

// if(isset($_SESSION['username'])==true){
//     $userID = $_SESSION['username'];
    
//     $query = "SELECT * from users WHERE username ='$userID' ";
//     $result = mysqli_query($conn,$query);
//     $row = mysqli_fetch_array($result);
//     $id = $row['userID'];
//     $docID =$_GET['ID'];

    
// }
    
    
    if(isset($_POST['submit'])){
        
        include_once "dbh.inc.php";

        $fullName = mysqli_real_escape_string($conn,$_POST['fullName']);
        $docDate = mysqli_real_escape_string($conn,$_POST['docDate']);
        $docTime = mysqli_real_escape_string($conn,$_POST['docTime']);
        $userEmail = mysqli_real_escape_string($conn,$_POST['uemail']);
        $userPhone = mysqli_real_escape_string($conn,$_POST['uphone']);
        $userDescription = mysqli_real_escape_string($conn,$_['docDescription']);
        
        
    
        $sql = "INSERT INTO appointment (user_fullname, 	docDate, 	docTime, 	userEmail, 	userPhone, 	userDescription,userID,doc_ID)  VALUES ('$fullName','$docDate','$docTime','$userEmail','$userPhone','$userDescription');";
        mysqli_query($conn,$sql);
        header('Location: ../doctorList.php?appointment=success');
            exit();
        // $stmt = mysqli_stmt_init($conn);
        // if(!mysqli_stmt_prepare($stmt,$sql)){
        //     header('Location: ../appointment.php?error=sqlerror');
        //     exit();
        }
        else{
            
            // mysqli_stmt_bind_param($stmt,'ssssssii',$fullName,$docDate,$docTime,$userEmail,$userPhone,$userDescription,$id,$docID);
            // mysqli_stmt_execute($stmt);
            // mysqli_stmt_store_result($stmt);
            header('Location: ../doctorList.php?appointment=NOTsuccess');
            exit();
        }
    
        // mysqli_stmt_close($stmt);
        mysqli_close($conn);
    
    
    // else{
    //     header('Location: ../doctorList.php');
    //         exit();
    // }
    
    

     