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
                
                    <form action="includes/addDoctor.inc.php" method="POST" onsubmit="return docRegValidation();" class="form-area">
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
                        id="fullName"
                        name="fullName" 
                        placeholder="Enter Name">
                        <label id="fullName__label1"></label>

                        <input type="text" id="uname" name="uname" placeholder="Enter Specialization-1">
                        <label id="userName__label1"></label>
                        <input type="text" id="uname2" name="uname2" placeholder="Enter Specialization-2">
                        <label id=""></label>
                        <input type="text" id="docDegree" name="docDegree" placeholder="Enter Degree">
                        <label id="docDegree_label1"></label>
                        <input type="text" id="docTime1" name="docTime1" placeholder="Enter Time Slot-1">
                        <label id="docTime1_label1"></label>
                        <input type="text" id="docTime2" name="docTime2" placeholder="Enter Time Slot-2">
                        <label id="docTime2_label2"></label>
                        <input type="text" id="docTime3" name="docTime3" placeholder="Enter Time Slot-3">
                        <label id="docTime3_label3"></label>

                        <input type="text" id="docDate1" name="docDate1" placeholder="Enter Date 1" required>
                        <label id="docTime3_label3"></label>
                        <input type="text" id="docDate2" name="docDate2" placeholder="Enter Date 2" required>
                        <label id="docTime3_label3"></label>
                        <input type="text" id="docDate3" name="docDate3" placeholder="Enter Date 3" required>
                        <label id="docTime3_label3"></label>

                        <input type="email" id="uemail" name="uemail" placeholder="Enter Email">
                        <label id="email__label1"></label>

                        

                        <input type="text"  id="uphone" name="uphone" placeholder="Enter Phone Number"> 
                        <label id="uphone__label1"></label>

                        <textarea class="my-5" name="docDescription" id="docDescription" cols="45" rows="5" placeholder="Enter Description"></textarea>



                        

                        <input
                        class="btn btn-danger "
                        type="submit"
                        name="submit"
                        value="Register"
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