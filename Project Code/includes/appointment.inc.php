<?php 
session_start();

if(isset($_SESSION['username'])==true){
        $userID = $_SESSION['username'];
    
    $query = "SELECT * from users WHERE username ='$userID'; ";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    

    $id = $row['userID'];
    $docID = $_GET['ID'];
    

    


if(isset($_POST['submit'])){
    require "dbh.inc.php";


    $fullName = mysqli_real_escape_string($conn,$_POST['fullName']);
    $docDate = mysqli_real_escape_string($conn,$_POST['docDate']);
    $docTime = mysqli_real_escape_string($conn,$_POST['docTime']);
    $uEmail = mysqli_real_escape_string($conn,$_POST['uemail']);
    $uPhone = mysqli_real_escape_string($conn,$_POST['uphone']);
    $uDesc = mysqli_real_escape_string($conn,$_POST['userDescription']);

    $sql = "INSERT INTO appointment (user_fullname,docDate,docTime,userEmail,userPhone,userDescription,userID,doc_ID) VALUES ('$fullName','$docDate','$docTime','$uEmail','$uPhone','$uDesc','$id','$docID');";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: ../doctorList.php?add=success");
        exit();
    }
    else{
        header("Location: ../doctorList.php?add=NOTsuccess");
        exit();
    }

}
}
?>