<body>
    <!---header area starts----->
    <div class="logo-bar">
        <!---logo area starts----->
        <div class="logo"><a href="index1.html">MediCare</a></div>
        <div class="signin text-right">




            <?php
            if (isset($_SESSION['username'])) {

                $user = $_SESSION['username'];
                $query = "SELECT * FROM users WHERE username ='$user';";
                $result = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($result);
                $userName = $row['userName'];

                echo '<a href="userProfile.php" class="btn btn-outline-dark ">' . $userName . ' </a>
          <a href="includes/logout.inc.php" class="btn btn-outline-dark"> Logout</a>';
            } else {
                echo ' <a href="login.php" class="btn btn-outline-dark "> Login</a>
              <a href="signup.php" class="btn btn-outline-dark"> Register</a>';
            }
            ?>


        </div>
    </div>
    <!-------logo area ends----->

    <?php include 'menu.inc.php'; ?>