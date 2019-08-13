<?php



if(isset($_POST['submit'])){
    require"dbh.inc.php";

    $doc_Fullname = $_POST['fullName'];
    $doc_Speacialization1 = $_POST['uname'];
    $doc_Speacialization2 = $_POST['uname2'];
    $doc_Degree = $_POST['docDegree'];
    $doc_Email = $_POST['uemail'];
    $doc_PhoneNumber = $_POST['uphone'];


    $sql = "INSERT INTO doctors(doc_Fullname, doc_Specialization1, doc_Specialization2,doc_Degree, doc_Email,doc_PhoneNumber)  VALUES (?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header('Location: ../addDoctor.php?error=sqlerror');
        exit();
    }
    else{
        
        mysqli_stmt_bind_param($stmt,'ssssss',$doc_Fullname,$doc_Speacialization1,$doc_Speacialization2,$doc_Degree,$doc_Email,$doc_PhoneNumber);
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

