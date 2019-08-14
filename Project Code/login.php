<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>

    <!-- css files -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/index1Res.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />

    <!-- js files- -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/index.js"></script>
  </head>
  <body>
    <header>
      <?php include'includes/menu.inc.php'; ?>
    </header>
    <div class="main">
      <div class="loginForm">
        <h1 class="text-center text-dark">Login</h1>

        <?php
          if(isset($_GET['error'])){
            if($_GET['error']=="emptyField"){
              echo'<div class="loginErrorMsg">
              <p id="errorMsg">Fill in all the empty fields</p>
  
            </div>';
            }
            else if($_GET['error']=='sqlerror'){
              echo'<div class="loginErrorMsg">
              <p id="errorMsg">There is problem with the DB.</p>
  
            </div>';
            }
            else if($_GET['error']=='wrongpassword'){
              echo'<div class="loginErrorMsg">
              <p id="errorMsg">Invalid username and password.</p>
  
            </div>';
            }
          }
        ?>
        <form action="includes/signin.inc.php" method="POST" onsubmit="return loginValidation();">
          <div class="form-input">
            <!-- <i class="fas fa-user"></i> -->
            <input type="text" id="userEmail" name="userEmail" placeholder="Enter Your Email/Username" />
            <label for="" id="email__label1"></label>
          </div>
          <div class="form-input">
            <!-- <i class="fas fa-lock"></i> -->
            <input type="password" id="userPassword" name="userPassword" placeholder="Enter Your Password" />
            <label id="pass__label1"></label>
          </div>
          
          <div class="loginWith">
            <a href='#'>Log in with Facebook</a >
          </div>
          <input
             class="btn btn-outline-dark "
             type="submit"
             name="submit"
             value="Login"
        />
        </form>
          <div class="forgot__pass">
            <a href="#">Forgot Password?</a>
      </div>
      
      
      <div class="form-footer">
        <a href="signup.php">Create An Account.</a>
      </div>
    </div>

    <script src="js/form-validation.js"></script>
  </body>
</html>
