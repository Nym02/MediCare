<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Doctor || MediCare</title>

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

                    <form action="includes/findAmbulance.inc.php" method="POST" onsubmit="return docRegValidation();" class="form-area">
                            <div class="form-header">
                                    <h3 class="mb-5">Doctor</h3>
                                </div>

                                <?php
                                 if(isset($_GET['error'])){
                                    if($_GET['error']=='sqlerror'){
                                        echo'<div class="loginErrorMsg">
                                        <p id="errorMsg">There is problem with the DB.</p>
                                        </div>';
                                    }
                                }
                                else if(isset($_GET['doctor'])){
                                    if($_GET['doctor']=='addedsuccessfully'){
                                        echo'<div class="loginErrorMsg">
                                        <p id="errorMsg">Doctor added successfully.</p>
                                        </div>';
                                    }
                                }


                                ?>
                        <input
                        type="text"

                        name="search"
                        placeholder="Enter Your City">
                        <label id="Enter YU"></label>



                        <input
                        class="btn btn-danger "
                        type="submit"
                        name="submit"
                        value="Searchs"
        />
                    </form>
                    <!-- <div class="form-footer">
                            <a href="login.php">Login With An Existing Account.</a>
                          </div> -->
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
