<?php
include 'dbh.inc.php';
         $sql="UPDATE users SET uid='$_POST[id]',f_name='$_POST[Name]',u_name='$_POST[uid]',u_email='$_POST[email]',u_pass='$_POST[pass]' WHERE uid=$_POST[id]";
		 if(mysqli_query($conn,$sql))
		 {
			 header("Location:update.php?success");
		 }
		 else
		 {
			 echo "Not update";
		 }
		 
		 
?>