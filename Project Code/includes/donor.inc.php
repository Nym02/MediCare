<?php
require 'dbh.inc.php';

$search = mysqli_real_escape_string($conn,$_POST['search']);

$sql = "SELECT * FROM donors WHERE dnr_group='$search'";
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
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-md-6">
                   <div class="row">

                       <div class="col-md-6">
                            <div class="doc__photo">
                                    <a href="doctorDetails.php?page=doctorDetails&ID=<?php echo $row['dnr_group'] ?>"><img src="../img/author.jpg" alt="<?php echo $row['amb_name'] ?>"></a>
                                </div>

                       </div>
                       <div class="col-md-6 mt-5">
                            <div class="doc__info">
                                    <h3>Name : <?php echo $row['dnr_name'] ?></h3>
                                    <h4><strong>Address:</strong><?php echo $row['dnr_address'] ?> </h4>
                                    <p class="docTime"><strong>Phone : </strong> <?php echo $row['dnr_phone'] ?> </p>

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
