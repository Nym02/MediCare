<?php
session_start();

require 'includes/dbh.inc.php';

// if(isset($_SESSION['username'])==true){
//     $userID = $_SESSION['username'];
    
//     $query = "SELECT * from users WHERE username ='$userID' ";
//     $result = mysqli_query($conn,$query);
//     $row = mysqli_fetch_array($result);
    

//     $id = $row['userID'];
    



$sql2 = "SELECT * from doctors where doc_ID= ".$_GET['ID'];

// $docID = $_GET['ID'];
// // echo $docID;


// if(isset($_POST['submit'])){
   

//     $fullName = $_POST['fullName'];
//     $docDate = $_POST['docDate'];
//     $docTime = $_POST['docTime'];
//     $userEmail = $_POST['uemail'];
//     $userPhone = $_POST['uphone'];
//     $userDescription = $_['docDescription'];
    


//     $sql = "INSERT INTO appointment(user_fullname, 	docDate, 	docTime, 	userEmail, 	userPhone, 	userDescription,userID,doc_ID)  VALUES (?,?,?,?,?,?,?,?)";
//     $stmt = mysqli_stmt_init($conn);
//     if(!mysqli_stmt_prepare($stmt,$sql)){
//         header('Location: doctorList.php?error=sqlerror');
//         exit();
//     }
//     else{
        
//         mysqli_stmt_bind_param($stmt,'ssssssii',$fullName,$docDate,$docTime,$userEmail,$userPhone,$userDescription,$id,$docID);
//         mysqli_stmt_execute($stmt);
//         // mysqli_stmt_store_result($stmt);
//         header('Location: appointment.php?appointment=success');
//         exit();
//     }

//     mysqli_stmt_close($stmt);
//     mysqli_close($conn);

// }
// else{
//     header('Location: doctorList.php?error=goingSomewhereElse');
//         exit();
// }



if($result2 = mysqli_query($conn,$sql2)) {
    $row2 = mysqli_fetch_assoc($result2);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make Appointment || MediCare</title>

     <!-- -css files- -->
     <link rel="stylesheet" href="css/all.min.css" />

     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/owl.carousel.css" />
     <link rel="stylesheet" href="css/owl.theme.default.min.css" />
     <link rel="stylesheet" href="css/index.css" />
     <link rel="stylesheet" href="css/index1Res.css" />
     <link rel="stylesheet" href="css/signup.css">
     <link rel="stylesheet" href="css/appointment.css">
 
     <!-- js files -->
 
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/index.js"></script>
</head>
<body>
    <section class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-md-6 docBio">
                    <div class="doctorIntro">
                        <div class="row mt-5 pt-5">
                            <div class="col-md-6 ">
                                <div class="doctorImg">
                                    <img src="img/author.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="doctorInfo">
                                    <h3 class="my-3"><strong>Name:</strong> <?php echo $row2['doc_Fullname']?></h3>
                                    <h4 class="mb-3"><strong>Speciality:</strong> Consultant, <?php echo $row2['doc_Specialization1'] ?>  </h4>
                                    <h5 class="mb-3"><strong>Degree:</strong> MBBS, D. (Ortho), FA (Ortho), FAMA Trained in Orth...</h5>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="appointmentForm">
                        <form action="includes/appointment.inc.php"  method="POST" onsubmit="return docRegValidation();" class="form-area">
                            <div class="form-header">
                                    <h3 class="mb-5">Make Appointment</h3>
                                </div>

                               
                        <input 
                        type="text"
                        id="fullName"
                        name="fullName" 
                        placeholder="Enter Name">
                        <label id="fullName__label1"></label>

                        
                        
                        <select class="docDate" name="docDate" id="docDate">
                            <option >Select Date</option>
                            
                            <option value="<?php echo $row2['doc_Date1']?>"><?php echo $row2['doc_Date1']?></option>

                            <option value="<?php echo $row2['doc_Date2']?>"><?php echo $row2['doc_Date2']?></option>

                            <option value="<?php echo $row2['doc_Date3']?>"><?php echo $row2['doc_Date3']?></option>
                        </select>

                        <select class="docTime" name="docTime" id="docTime">
                            <option >Select Time</option>
                            <option value="<?php echo $row2['doc_Time1']?>"><?php echo $row2['doc_Time1']?></option>

                            <option value="<?php echo $row2['doc_Time2']?>"><?php echo $row2['doc_Time2']?></option>

                            <option value="<?php echo $row2['doc_Time3']?>"><?php echo $row2['doc_Time3']?></option>
                            
                        </select>

                        <input type="email" id="uemail" name="uemail" placeholder="Enter Email">
                        <label id="email__label1"></label>

                        

                        <input type="text"  id="uphone" name="uphone" placeholder="Enter Phone Number"> 
                        <label id="uphone__label1"></label>

                        <textarea class="my-5" name="docDescription" id="docDescription" cols="45" rows="5" placeholder="Briefly describe your problem."></textarea>



                        

                        <input
                        class="btn btn-danger "
                        type="submit"
                        name="submit"
                        value="Make Appointment"
        />
                    </form>
                    </div>
                </div>
<?php }?>
            </div>
        </div>
        
    </section>
</body>

</html>