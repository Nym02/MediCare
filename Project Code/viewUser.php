<?php
session_start();

?>



<?php
include 'includes/dbh.inc.php';

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List || MediCare</title>

    <!-- -css files- -->
    <link rel="stylesheet" href="css/all.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />

    <!-- <link rel="stylesheet" href="css/doctorList.css"> -->
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
    <!---header area starts----->
    <div class="logo-bar">
      <!---logo area starts----->
      <div class="logo"><a href="index1.html">MediCare</a></div>
      <div class="signin text-right">

       <?php
        if (isset($_SESSION['adminname'])) {
          echo '<a href="includes/logout.inc.php" class="btn btn-outline-dark"> Logout</a>';
        } else {
          echo ' <a href="Alogin.php" class="btn btn-outline-dark "> Login</a>';
        }
        ?>


      </div>
    </div>
    <header class="header-area">
        <?php include 'includes/adminMenu.inc.php'; ?>
    </header>
    <div class="table-responsive-sm table-responsive-md table-responsive-lg">
        <table class="table tableInfo">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>

                    <th scope="col">Phone</th>

                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>

                    <td><?php echo $row['userID'] ?></td>
                    <td><?php echo $row['userFullName'] ?></td>
                    <td><?php echo $row['userName'] ?></td>
                    <td><?php echo $row['userEmail'] ?></td>

                    <td><?php echo $row['userPhone'] ?></td>

                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</body>

</html>
