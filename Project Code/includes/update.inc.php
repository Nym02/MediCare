<?php
include 'dbh.inc.php';
         $sql="UPDATE users SET userID='$_POST[id]',userFullName='$_POST[Name]',userName='$_POST[uid]',userEmail='$_POST[email]',userPassword='$_POST[pass]' WHERE userID=$_POST[id]";
		 if(mysqli_query($conn,$sql))
		 {
			 header("Location:../update.php?success");
		 }
		 else
		 {
			 echo "Not update";
		 }
		 
		 
?>