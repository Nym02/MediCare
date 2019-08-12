<?php
if (isset($_POST['submit'])) {
    //connect to the database
    include_once 'dbh.inc.php';
    //fatch data from client
    $search = mysqli_real_escape_string($conn,$_POST['search']);
    //check for empty string
    if(empty($search)){
        header("Location:../index1.php?login=error");
        exit();
    }else{
        //fatch data from database
        $sql="SELECT * FROM doctors WHERE d_name='$search'";
        $result=mysqli_query($conn,$sql);
        $resultCheck=mysqli_num_rows($result);
        if($resultCheck<1){
            header("Location:../index1.php?login=error");
            exit();
        }else{
            $rows=mysqli_fetch_assoc($result);
            echo $rows['d_name'];
        }
    }
    
} else {
    echo 'not submitted';
}
?>
