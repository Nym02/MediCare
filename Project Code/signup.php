<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an Account || MediCare</title>

    <link rel="stylesheet" href="css/all.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/signup.css">
   

    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
    <header class="header-area">

    </header>

    <section class="form">
        <div class="form-body">
                
                    <form action="includes/signup.inc.php" method="POST" onsubmit="return regValidation();" class="form-area">
                            <div class="form-header">
                                    <h3 class="mb-6">Registration</h3>
                                </div>
                                <?php
                                    if(isset($_GET['error'])){
                                        if($_GET['error']=='sqlerror'){
                                            echo'<div class="loginErrorMsg">
                                            <p id="errorMsg">There is problem with the DB.</p> 
                                            </div>';
                                        }
                                    }
                                    else if(isset($_GET['signup'])){
                                        if($_GET['signup']=='success'){
                                            echo'<div class="loginErrorMsg">
                                            <p id="errorMsg">User added successfully.</p> 
                                            </div>';
                                        }
                                    }
                                
                                
                                
                                ?>
                        <input 
                        type="text"
                        id="fullName"
                        name="fullName" 
                        placeholder="Enter Name">
                        <label id="fullName__label1"></label>

                        <input type="text" id="uname" name="uname" placeholder="Enter Username">
                        <label id="userName__label1"></label>

                        <input type="email" id="uemail" name="uemail" placeholder="Enter Email">
                        <label id="email__label1"></label>

                        <input type="password" name="upass" id="upass" placeholder="Enter Password">
                        <label id="upass__label1"></label>

                        <!-- <input type="text"  id="uphone" placeholder="Enter Phone Number"> 
                        <label id="uphone__label1"></label> -->

                        

                        <input
                        class="btn btn-outline-dark "
                        type="submit"
                        name="submit"
                        value="Register"
        />
                    </form>
                    <div class="form-footer">
                            <a href="login.php">Login With An Existing Account.</a>
                          </div>
        </div>
    </section>


    <!-- js files -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/form-validation.js"></script>
</body>
</html>