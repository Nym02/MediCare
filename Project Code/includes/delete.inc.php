<?php
include 'dbh.inc.php';
         $sql="DELETE FROM users  WHERE userID=$_POST[id]";
		 if(mysqli_query($conn,$sql))
		 {
			 header("Location:../delete.php?success");
		 }
		 else
		 {
			 echo "Not update";
		 }
		 
		 
?>