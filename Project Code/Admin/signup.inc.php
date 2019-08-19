<?php

if(isset($_POST['submit'])){

	include_once 'dbh.inc.php';

	$first=mysqli_real_escape_string($conn,$_POST['first_name']);
	$last=mysqli_real_escape_string($conn,$_POST['last_name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);


	   $sql="SELECT * FROM volunteer WHERE v_uid_uid='$uid'";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
	   if ($resultCheck >0) {
      echo "Username already exists";
  }

  else{
	//error handler
	//check for empty fields
	
	if (empty($first) || empty($last) || empty($email) ||empty($phone)|| empty($uid) || empty($pass)) {

		header("Location:signup.php?signup=empty");
	    exit();
	}else{

		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ) {

			header("Location:signup.php?signup=invalid");
	        exit();
		}else{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location:signup.php?signup=invalid_email");
	             exit();			
		}
		else{

			if (!is_numeric($phone)) {
				header("Location:signup.php?signup=invalid_phone");
	             exit();
				
			}
		   else{
			$sql="SELECT * FROM volunteer WHERE v_uid=$uid";
			$result= mysqli_query($conn,$sql);
			$resultCheck=mysqli_num_rows($result);

			if ($resultCheck > 0) {

				header("Location:signup.php?signup=usertaken");
	             exit();
			}else{
				//$hashedpass=password_hash($pass,PASSWORD_DEFAULT);

				$sql="INSERT INTO volunteer(first_name,last_name,v_email,v_phone,v_uid,v_pass) 
				VALUES ('$first','$last','$email','$phone','$uid','$pass');";
				mysqli_query($conn,$sql);
				header("Location:signup.php?signup=success");
	             exit();
	         }



			}
		}

	}


 }
  }
} else {
	header("Location:signup.php");
	exit();
}
