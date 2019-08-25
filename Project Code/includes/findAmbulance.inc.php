<?php
require 'dbh.inc.php';

$search = mysqli_real_escape_string($conn,$_POST['search']);

$sql = "SELECT * FROM ambulance WHERE amb_city='$search'";
$result = mysqli_query($conn,$sql);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctors || MediCare</title>
    <!-- -css files- -->
    <link rel="stylesheet" href="css/all.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/index1Res.css" />
    <link rel="stylesheet" href="css/doctorList.css">

    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
    <section class="doctors">
        <div class="container">
            <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)) {
              if (mysqli_num_rows($result)<1) {
                echo " no match found";
              }?>
                <div class="col-md-6">
                   <div class="row">

                       <div class="col-md-6">
                            <div class="doc__photo">
                                    <a href="doctorDetails.php?page=doctorDetails&ID=<?php echo $row['amb_id'] ?>"><img src="../img/amb.jpg" alt="<?php echo $row['amb_name'] ?>"></a>
                                </div>

                       </div>
                       <div class="col-md-6 mt-5">
                            <div class="doc__info">
                                    <h3><?php echo $row['amb_name'] ?></h3>
                                    <h4><strong>City:</strong><?php echo $row['amb_city'] ?> </h4>
                                    <p class="docTime"><strong>Phone : </strong> <?php echo $row['amb_phone'] ?> </p>

                                </div>
                       </div>
                   </div>
                </div>
                   <?php } ?>
            </div>
        </div>
    </section>
</body>
</html>
