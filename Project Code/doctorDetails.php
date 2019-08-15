<?php
require 'includes/dbh.inc.php';

$sql = "SELECT * from doctors WHERE doc_ID =".$_GET['ID'];
if($result = mysqli_query($conn,$sql)){
    $row = mysqli_fetch_assoc($result);


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['doc_Fullname'] ?> || MediCare</title>

     <!-- -css files- -->
     <link rel="stylesheet" href="css/all.min.css" />
     <link rel="stylesheet" href="css/bootstrap.min.css" />
     <link rel="stylesheet" href="css/owl.carousel.css" />
     <link rel="stylesheet" href="css/owl.theme.default.min.css" />
     <link rel="stylesheet" href="css/index.css" />
     <link rel="stylesheet" href="css/index1Res.css" />
     <link rel="stylesheet" href="css/doctorDetails.css">
 
     <!-- js files -->
 
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/index.js"></script>
</head>
<body>
    <section class="docBack">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <img src="img/doc2.jpg" alt="Background"> -->
                </div>
            </div>
        </div>
    </section>
    <section class="doctor">
        <div class="container">
            <div class="row py-5 my-5">
                <div class="col-md-4">
                    <div class="doc__img">
                        <img src="img/author.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="docInfo">
                        <h1><?php echo $row['doc_Fullname'] ?></h1>
                        <h3><strong>Speciality:</strong> Consultant, <?php echo $row['doc_Specialization1'] ?> , <?php echo $row['doc_Specialization2'] ?></h3>
                        <h4><strong>Degree:</strong> <?php echo $row['doc_Degree'] ?> </h4>

                        <P><strong>Description:</strong> <?php echo $row['doc_Description'] ?> </P>
                        <a href="#" class="btn btn-info">Get Appointment</a>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
    </section>
</body>
</html>