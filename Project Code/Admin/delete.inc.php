<?php
include 'dbh.inc.php';
         $sql="DELETE FROM users  WHERE uid=$_POST[id]";
		 if(mysqli_query($conn,$sql))
		 {
			 header("Location:delete_user.php?success");
		 }
		 else
		 {
			 echo "Not update";
		 }
		 
		 
?>