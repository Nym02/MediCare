<?php
include 'dbh.inc.php';
         $sql="UPDATE doctors SET doc_ID='$_POST[id]',doc_Fullname='$_POST[Name]',doc_Specialization1='$_POST[special1]',doc_Specialization2='$_POST[special2]',doc_Degree='$_POST[degree]',doc_Time1='$_POST[time1]',doc_Time2='$_POST[time2]',doc_Time3='$_POST[time3]',doc_Date1='$_POST[date1]',doc_Date2='$_POST[date2]',doc_Date3='$_POST[date3]',doc_Email='$_POST[email]',doc_PhoneNumber='$_POST[phone]',doc_Description='$_POST[description]' WHERE doc_ID=$_POST[id]";
		 if(mysqli_query($conn,$sql))
		 {
			 header("Location:../updateDoctor.php?success");
		 }
		 else
		 {
			 echo "Not update";
		 }
		 
		 
?>