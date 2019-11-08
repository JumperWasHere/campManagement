<?php
session_start();
   if($_SESSION['un']==null)
   {
        echo "<script type=\"text/javascript\">
        alert(\"Login First\");
        window.location=\"../index.php\";
        </script>";
   }
   
   
   else {
include ('connection.php');
	
	
extract($_POST);				
	
	$query1 = "UPDATE `student` SET `firstName`='$firstName',`lastName`='$lastName',`fatherName`='$fatherName',`motherName`='$motherName',`birthdate`='$birthdate',
	`gender`='$gender',`dept`='$dept',`permanentAddress`='$permanentAddress',`phone`='$phone',`email`='$email' 
	WHERE `studentId`=$studentId";
	$result = mysqli_query ($con, $query1);
						
	echo "<script type=\"text/javascript\">
        alert(\"Successfully Updated\");
        window.location=\"../studentDetails.php\";
        </script>";
	   
	   
	
   }
?>

