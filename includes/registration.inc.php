<?php

if(isset($_POST['submit'])){

    // connection between client and server
    include_once 'dbh.inc.php';  

    // data fetch from from client 

    $name = mysqli_real_escape_string($conn,$_POST['uname']);
    $uid = mysqli_real_escape_string($conn,$_POST['uid']);
    $email = mysqli_real_escape_string($conn,$_POST['uemail']);
    $phone = mysqli_real_escape_string($conn,$_POST['uphone']);
    $pass = mysqli_real_escape_string($conn,$_POST['upass']);

    // Check user already exist or not.

    $sql = "SELECT * FROM users WHERE user_uid = '$uid'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);
    if($resultCheck>0){
        echo "UserNmae already exist";
    }
    else{
        //check for empty fields

        if(empty($name) || empty($uid) || empty($email) ||empty($pass)|| empty($phone)) {   

            header("Location: ../registration.php?signup=empty");
            exit();
        }else{
            // check the valid name

            if (!preg_match("/^[a-zA-Z]*$/", $name)) {                                    
                header("Location: ../registration.php?signup=invalid_Name");
                exit();
            }else{
                // email validation

                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){                           
                    header("Location: ../registration.php?signup=invalid_email");
                    exit();
                }
                else{
                    // phone number validation 

                    if(!is_numeric($phone)){                                              
                        header("Location: ../registration.php?signup=invalid_phoneNo");
                        exit(); 
                    }
                    else{
                        // send data into the server

                        $sql = "INSERT INTO users(full_name, user_uid, user_email, user_phone,user_pass)
                        VALUES('$name','$uid','$email','$phone','$pass');";
                        mysqli_query($conn,$sql);
                        header("Location: ../registration.php?signup=success");
                         exit();
                    }
                    
                }

            }

        }

    }

} else{
    header("Location: ../registration.php");
	exit(); 
}