<div class="logo-bar">
    <!---logo area starts----->
    <div class="logo"><a href="index1.html">MediCare</a></div>
    <div class="signin text-right">

        <?php
        if (isset($_SESSION['username'])) {
            echo '<a href="includes/logout.inc.php" class="btn btn-outline-dark"> Logout</a>';
        } else {
            echo ' <a href="login.php" class="btn btn-outline-dark "> Login</a>
              <a href="signup.php" class="btn btn-outline-dark"> Register</a>';
        }
        ?>


    </div>
</div>