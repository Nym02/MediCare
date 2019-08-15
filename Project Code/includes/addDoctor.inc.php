<?php



if(isset($_POST['submit'])){
    require"dbh.inc.php";

    $doc_Fullname = $_POST['fullName'];
    $doc_Speacialization1 = $_POST['uname'];
    $doc_Speacialization2 = $_POST['uname2'];
    $doc_Degree = $_POST['docDegree'];
    $doc_TimeSlot1 = $_POST['docTime1'];
    $doc_TimeSlot2 = $_POST['docTime2'];
    $doc_TimeSlot3 = $_POST['docTime3'];
    $doc_Date1 = $_POST['docDate1'];
    $doc_Date2 = $_POST['docDate2'];
    $doc_Date3 = $_POST['docDate3'];
    $doc_Email = $_POST['uemail'];
    $doc_PhoneNumber = $_POST['uphone'];
    $doc_Description = $_POST['docDescription'];


    $sql = "INSERT INTO doctors(doc_Fullname, doc_Specialization1, doc_Specialization2,doc_Degree,doc_Time1,doc_Time2,doc_Time3,doc_Date1,doc_Date2,doc_Date3, doc_Email,doc_PhoneNumber,doc_Description)  VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../addDoctor.php?error=sqlerror');
        exit();
    }
    else{
        
        mysqli_stmt_bind_param($stmt,'sssssssssssss',$doc_Fullname,$doc_Speacialization1,$doc_Speacialization2,$doc_Degree,$doc_TimeSlot1,$doc_TimeSlot2,$doc_TimeSlot3,$doc_Date1,$doc_Date2,$doc_Date3,$doc_Email,$doc_PhoneNumber,$doc_Description);
        mysqli_stmt_execute($stmt);
        // mysqli_stmt_store_result($stmt);
        header('Location: ../addDoctor.php?doctor=addedsuccessfully');
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
else{
    header('Location: ../addDoctor.php');
        exit();
}

