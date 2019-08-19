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
    <link rel="stylesheet" href="../css/all.min.css" />

    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/index1Res.css" />

    <!-- js files -->

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/index.js"></script>
  </head>
  <body>
    <header class="header-area">
      <!---header area starts----->
      <div class="logo-bar">
        <!---logo area starts----->


      <nav class="navbar navbar-dark bg-dark  navbar-expand-md">

          <div class="container">
            <a class="navbar-brand active" href="Ahome.php">Home</a>
            <ul class="navbar-nav">
  
                <li class="nav-item"><a class="nav-link" href="user_view.php">View User</a></li>
                <li class="nav-item"><a class="nav-link" href="delete_user.php">Delete user</a></li>
                <li class="nav-item"><a class="nav-link" href="update.php">update User</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
      </nav>
     
      
    	<?php
      include 'dbh.inc.php';
      $sql="SELECT * FROM users ";
  $result=mysqli_query($conn,$sql);

      ?>
      <table>
        <tr>
          <th>Id</th>
          <th>first_name</th>
          <th>user_uid</th>
          <th>user_email</th>
          <th>user_pass</th>

        </tr>

        <?php
        while ($row=mysqli_fetch_array($result)) {

          echo "<tr><form action='delete.inc.php' method=POST>";
          echo "<td><input type=text name=id value='".$row['uid']."'</td>";
          echo "<td><input type=text name=Name value='".$row['f_name']."'</td>";
          echo "<td><input type=text name=uid value='".$row['u_name']."'</td>";
          echo "<td><input type=text name=email value='".$row['u_email']."'</td>";
          echo "<td><input type=text name=pass value='".$row['u_pass']."'</td>";
     
     echo "<td><input type=submit value=Delete>";
     echo"</form></tr>";
        }


        ?>



      </table>

  </body>
</html>
