<?php

    include('connection.php');
	session_start();
	
		$id = $_SESSION['parentId'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $fatherName = $_POST['fatherName'];
        $motherName = $_POST['motherName'];
		$birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];
        $dept= $_POST['dept'];
        $permanentAddress = $_POST['permanentAddress'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
				
$sql = "INSERT INTO `studentdetail`( `studentId`,`firstName`, `lastName`, `fatherName`, `motherName`, `birthdate`, `gender`, `dept`, `permanentAddress`, `phone`, `email`, `id`) VALUES ('','$firstName', '$lastName', '$fatherName', '$motherName', '$birthdate', '$gender', '$dept', '$permanentAddress', '$phone', 
'$email', '".$_SESSION['parentId']."')";

$save = mysqli_query($con, $sql);
$sql1 = "INSERT INTO `student`( `studentId`,`firstName`, `lastName`, `fatherName`, `motherName`, `birthdate`, `gender`, `dept`, `permanentAddress`, `phone`, `email`) VALUES ('','$firstName', '$lastName', '$fatherName', '$motherName', '$birthdate', '$gender', '$dept', '$permanentAddress', '$phone', 
'$email')";	

$save1 = mysqli_query($con, $sql1);	
	if ($save && $save1){
          $_SESSION['success'] = '';
          echo "<script type='text/javascript'>alert('You have successfully registered sudent.');
            window.location='../parent/parenthome.php';
              </script>";
          }
          else {
          echo "<script type='text/javascript'>alert('Error!');
            window.location='../parent/studentregistration.php';
            </script>";
          }

		
	
?>

