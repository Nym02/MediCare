<?php
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home | MediCare</title>
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
      <!---header area starts----->
      <div class="logo-bar">
        <!---logo area starts----->
        <div class="logo"><a href="index1.html">MediCare</a></div>
        <div class="signin text-right">
          
          <?php
            if(isset($_SESSION['username'])){
              echo'<a href="includes/logout.inc.php" class="btn btn-outline-dark"> Logout</a>';
            }
            else{
              echo' <a href="login.php" class="btn btn-outline-dark "> Login</a>
              <a href="signup.php" class="btn btn-outline-dark"> Register</a>';
            }
          ?>
         
          
        </div>
      </div>
      <!-------logo area ends----->

     <?php include'includes/adminMenu.inc.php'; ?>
    </header>

    <section class="getStarted">
      <?php
      include 'includes/dbh.inc.php';
      $sql="SELECT * FROM users ";
  $result=mysqli_query($conn,$sql);

      ?>
      <table>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>userName</th>
          <th>Email</th>

        </tr>

        <?php
        while ($row=mysqli_fetch_array($result)) {

          echo "<tr><form action='includes/delete.inc.php' method=POST>";
          echo "<td><input type=text name=id value='".$row['userID']."'</td>";
          echo "<td><input type=text name=Name value='".$row['userFullName']."'</td>";
          echo "<td><input type=text name=uid value='".$row['userName']."'</td>";
          echo "<td><input type=text name=email value='".$row['userEmail']."'</td>";
     
     echo "<td><input type=submit value=Delete>";
     echo"</form></tr>";
        }


        ?>



      </table>
    </section>

   
    
  </body>
</html>
