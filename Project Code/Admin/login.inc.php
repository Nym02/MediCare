<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	
	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
	echo $uid;
	echo  $pass;
	
	
	
	

	if (empty($uid) || empty($pass)) {
		echo $uid;
		echo  $pass;
		header("Location:login.php?login=empty");
					exit();
	}else{

		$sql="SELECT * FROM admin WHERE a_uid='$uid'";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if ($resultCheck <1) {

			header("Location:login.php?login=error");
			exit();
		}
		else{
                if ($row=mysqli_fetch_assoc($result)) {
				
				if ($pass != $row['a_pass'] ) {

					header("Location:login.php?login=wrong_password");
					exit();
				}
				else
				{
					$_SESSION['a_id']=$row['a_id'];
					$_SESSION['f_name']=$row['first_name'];
					
					header("Location:admin-home.php?login=success");
					exit();
				}
			}
		}
	}
}
else
{
	header("Location:login.php?login=error");
exit();
}









































/*<?php



session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid=mysqli_real_escape_string($conn,$_POST['uid']);
	$pass=mysqli_real_escape_string($conn,$_POST['pass']);
	
   

	if (empty($uid) || empty($pass)) {
		header("Location:../login.php?login=empty");
		exit();
	}else{


		$sql="SELECT * FROM users WHERE user_id='$uid'";
		$result=mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);
		if ($resultCheck <1) {

			header("Location:../login.php?login=Invalid_id");
			exit();
		}
		else{

			if ($row=mysqli_fetch_assoc($result)) {
				
				 //$hashedpassCheck=password_verify($pass,$row['user_pass']);
				

				if ($hashedpassCheck == false) {
                    echo $hashedpassCheck;

					header("Location:../login.php?login=error2");
					exit();
				}
				elseif($hashedpassCheck == true)
				{
					$_SESSION['u_id']=$row['user_id'];
					$_SESSION['f_name']=$row['first_name'];
					$_SESSION['l_name']=$row['last_name'];
					$_SESSION['u_email']=$row['user_emali'];
					$_SESSION['u_phone']=$row['user_phone'];
					$_SESSION['u_uid']=$row['user_uid'];
					header("Location:../home.php?login=success");
					exit();
				}
				
				if ($pass != $row['user_pass'] ) {
                    echo $hashedpassCheck;

					header("Location:../login.php?login=wrong_password");
					exit();
				}
				else
				{
					$_SESSION['u_id']=$row['user_id'];
					$_SESSION['f_name']=$row['first_name'];
					$_SESSION['l_name']=$row['last_name'];
					$_SESSION['u_email']=$row['user_emali'];
					$_SESSION['u_phone']=$row['user_phone'];
					$_SESSION['u_uid']=$row['user_uid'];
					header("Location:../home.php?login=success");
					exit();
				}
			}
			else{
				echo "something wrong";
			}
		}
			
		}
		
			}
		}
		}
		 

		
	}
}
else
{
	echo "hello";
	header("Location:../index.php?login=error");
exit();
}*/