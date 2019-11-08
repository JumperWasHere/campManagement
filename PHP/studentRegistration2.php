<?php
session_start();
   if($_SESSION['unn']==null)
   {
        echo "<script type=\"text/javascript\">
        alert(\"Login First\");
        window.location=\"../index.html\";
        </script>";
   }
   
include ('connection.php');
	
	$agent = $_SESSION['un'];
 
	extract($_POST);				
														   
$sql = "INSERT INTO `student`( `studentId`,`firstName`, `lastName`, `fatherName`, `motherName`, `birthdate`, `gender`, `dept`, `permanentAddress`, `phone`, `email`) 								          VALUES ('','$firstName', '$lastName', '$fatherName', '$motherName', '$birthDate', '$gender', '$dept', '$permanentAddress', '$phone', '$email')";

	$result=mysqli_query($con, $sql);
	echo "<script type=\"text/javascript\" >
			alert(\"Data Added Successfully\");
			window.location=\"../teacher/StudentRegistration.php\";
			</script>";

		
	
?>

