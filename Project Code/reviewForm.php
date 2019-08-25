<?php
session_start();
if (isset($_SESSION['username'])) {




    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Review || MediCare</title>

    <!-- -css files- -->
    <link rel="stylesheet" href="css/all.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/index1Res.css" />

    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/index.js"></script>
</head>

<body>
    <header class="header-area">
        <?php include 'logo.inc.php'; ?>
    </header>
    <div class="container">
        <form action="includes/addReview.php" method="POST">
            <div class="form-group mt-5">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email Address</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>


            <div class="form-group">
                <label for="exampleFormControlTextarea1">Write Review</label>
                <textarea name="textArea" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <input type="submit" name="submit" value="Write" class="btn btn-danger">
        </form>
    </div>
    <?php } ?>

    <?php

    require 'includes/footer.inc.php';

    ?>
</body>

</html>