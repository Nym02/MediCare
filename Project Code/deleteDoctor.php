<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Delete Doctor | MediCare</title>
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



  <style>
    body {
      background-image: none;
    }

    input {
      padding: 5px 20px;
      border: 1px solid #fff;
      border-radius: 5px;
      background-color: #000;
      color: #fff;
    }
  </style>
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
    <!-------logo area ends----->

    <?php include 'includes/adminMenu.inc.php'; ?>
  </header>

  <section class="getStarted">
    <?php
    include 'includes/dbh.inc.php';
    $sql = "SELECT * FROM doctors ";
    $result = mysqli_query($conn, $sql);

    ?>
    <div class="table-responsive-md table-responsive-lg table-responsive-xl table-responsive-sm ">
      <table class="table">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Specialization 1</th>
          <th>Specialization 1</th>
          <th>Degree</th>
          <th>Slot 1</th>
          <th>Slot 2</th>
          <th>Slot 3</th>
          <th>Date 1</th>
          <th>Date 2</th>
          <th>Date 3</th>
          <th>Email</th>
          <th>PHone No</th>
          <th>Description</th>

        </tr>

        <?php
        while ($row = mysqli_fetch_array($result)) {

          echo "<tr><form action='includes/deleteDoctor.inc.php' method=POST>";
          echo "<td><input type=text name=id value='" . $row['doc_ID'] . "'</td>";
          echo "<td><input type=text name=Name value='" . $row['doc_Fullname'] . "'</td>";
          echo "<td><input type=text name=special1 value='" . $row['doc_Specialization1'] . "'</td>";
          echo "<td><input type=text name=special2 value='" . $row['doc_Specialization2'] . "'</td>";
          echo "<td><input type=text name=degree value='" . $row['doc_Degree'] . "'</td>";
          echo "<td><input type=text name=time1 value='" . $row['doc_Time1'] . "'</td>";
          echo "<td><input type=text name=time2 value='" . $row['doc_Time2'] . "'</td>";
          echo "<td><input type=text name=time3 value='" . $row['doc_Time3'] . "'</td>";
          echo "<td><input type=text name=date1 value='" . $row['doc_Date1'] . "'</td>";
          echo "<td><input type=text name=date2 value='" . $row['doc_Date2'] . "'</td>";
          echo "<td><input type=text name=date3 value='" . $row['doc_Date3'] . "'</td>";
          echo "<td><input type=text name=email value='" . $row['doc_Email'] . "'</td>";
          echo "<td><input type=text name=phone value='" . $row['doc_PhoneNumber'] . "'</td>";
          echo "<td><input type=text name=description value='" . $row['doc_Description'] . "'</td>";

          echo "<td><input class='btn btn-info' type=submit value=Delete>";
          echo "</form></tr>";
        }


        ?>



      </table>
    </div>
  </section>



</body>

</html>
