<?php
session_start();
require 'includes/dbh.inc.php';

if (isset($_SESSION['username']) == true) {
    $userID = $_SESSION['username'];

    $query = "SELECT * from users WHERE username ='$userID'; ";
    $result3 = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result3);
    $id = $row['userID'];





    //fetching appointment info from appointment table

    $query2 = "SELECT * from appointment where userID=$id";
    $result4 = mysqli_query($conn, $query2);


    //fetching user info from the users table
    $userQuery = "SELECT * FROM users where userID=$id";
    if ($userResult = mysqli_query($conn, $userQuery)) {
        $userRow = mysqli_fetch_assoc($userResult);





        ?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile || MediCare</title>

    <!-- -css files- -->
    <link rel="stylesheet" href="css/all.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <link rel="stylesheet" href="css/index.css" type="text/css" />
    <link rel="stylesheet" href="css/index1Res.css" type="text/css" />
    <link rel="stylesheet" href="css/userProfile.css" type="text/css">


    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/index.js"></script>



    <style>
    input{
        background-color: #F8F9FA;
        border: none;
    }
    
    </style>


</head>

<body>
    <header class="header-area">
        <?php include 'logo.inc.php' ?>
    </header>
    <section class="users">
        <div class="container">
            <div class="row mt-5 pt-5">
                <div class="col-md-4 ">
                    <div class="userImg text-sm-center text-center">
                        <img src="img/author.jpg" alt="user">
                        <h4><?php echo $userRow['userFullName'] ?></h4>
                        <p class="lead mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse ipsum earum animi consequuntur nesciunt optio eveniet architecto, molestias id repellendus?</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="userProfile bg-light">
                        <div class="row ">
                            <div class="col-md-12 ">
                                <h4 class="aboutHeader">About</h4>

                                <div class="userProfileInfo">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-6 userProfileInfoMargin1">
                                            <div class="userProfileTag">
                                                <p class="userFullName">Name:
                                                </p>
                                                <p class="userName">User Name:</p>
                                                <p class="userEmail">Email </p>
                                                <p class="userPhone">Phone: </p>

                                                <p class="userPhone">
                                                    Country:
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-6 userProfileInfoMargin2">
                                            <div class="userProfileTagValue">
                                                <p class="userFullName"><?php echo $userRow['userFullName'] ?>
                                                </p>
                                                <p class="userName"><?php echo $userRow['userName'] ?></p>
                                                <p class="userEmail"><?php echo $userRow['userEmail'] ?></p>
                                                <p class="userPhone">+8801949509823 </p>

                                                <p class="userPhone">
                                                    Bangladesh
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edit">
                                        <a href="#" class="btn btn-danger editButton">Edit</a>
                                    </div>
                                    <hr>
                                    <?php } ?>
                                </div>
                                <div class="col-md-12">
                                    <h1>Appointments: </h1>
                                    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
                                        <table class="table tableInfo">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Doctor Name</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Phone</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($rowCount = mysqli_fetch_array($result4)) { ?>
                                                <tr>
                                                <form action='includes/deleteAppoint.inc.php' method=POST>

                                                    <td><input type="text" name="id" value="<?php echo $rowCount['ID'] ?>"disabled="disabled">
                                                    <input type="hidden" name="id" value="<?php echo $rowCount['ID'] ?>">
                                                    </td>
                                                    <td><?php echo $rowCount['user_fullname'] ?></td>
                                                    <td><?php echo $rowCount['doc_Name'] ?></td>
                                                    <td><?php echo $rowCount['docDate'] ?></td>
                                                    <td><?php echo $rowCount['docTime'] ?></td>
                                                    <td><?php echo $rowCount['userPhone'] ?></td>
                                                    <td>                                                   
                                                    <input class="btn btn-danger" type="submit" name="submit" value="X"></td>
                                                    </form>
                                                </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        <?php } ?>



    </section>
</body>


</html>