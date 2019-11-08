<?php
session_start();
include ('connection.php');
extract($_POST);				
														   
$sql = "INSERT INTO `admin`( `id`,`name`, `pass`, `email`,) VALUES ('','$name', '$pass', '$email')";

	$result=mysqli_query($con, $sql);
	echo "<script type=\"text/javascript\" >
			alert(\"Data Added Successfully\");
			window.location=\"../admin.php\";
			</script>";

		
	
?>

