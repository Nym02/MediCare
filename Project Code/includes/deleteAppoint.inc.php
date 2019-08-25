<?php
include 'dbh.inc.php';
         $sql="DELETE FROM appointment  WHERE ID=$_POST[id]";
		 if(mysqli_query($conn,$sql))
		 {
			 header("Location:../userProfile.php?success");
		 }
		 else
		 {
			 echo "Not update";
		 }
		 
		 
?>