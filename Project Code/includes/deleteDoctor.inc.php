<?php
include 'dbh.inc.php';
         $sql="DELETE FROM doctors  WHERE doc_ID=$_POST[id]";
		 if(mysqli_query($conn,$sql))
		 {
			 header("Location:../deleteDoctor.php?success");
		 }
		 else
		 {
			 echo "Not update";
		 }
		 
		 
?>