<?php
	
	function dnd($input) {
		
		echo "<pre>";
		var_dump($input);
		echo "</pre>";
		die();
	}
	
	
	session_start();
	
	
	include_once('../php/connection.php');
	

	if(isset($_POST['paymentSubmit'])) {
		
		$errors = [];
		$success = [];
		
		$uploadFileDir = "../uploads/slips/";
		
		$paymentType = $_POST['paymentType'];
		$paymentMonth = $_POST['paymentMonth'];
		$paymentYear = $_POST['paymentYear'];
		$paymentFirstName = $_POST['paymentFirstName'];
		$paymentLastName = $_POST['paymentLastName'];
		$paymentContactNumber = $_POST['paymentContactNumber'];
		$paymentEmail = $_POST['paymentEmail'];
		$paymentTransactionSlip = $_FILES['paymentTransactionSlip'];
		$paymentValue = $_POST['paymentValue'];
		
		
		if(empty($paymentFirstName) OR empty($paymentLastName) OR empty($paymentContactNumber) OR empty($paymentEmail) OR empty($paymentTransactionSlip) OR empty($paymentValue)) {
			
			$errors[] = "Please complete all available fields.";
		}
		
		if(!ctype_digit($paymentContactNumber)) {
			
			$errors[] = "Invalid contact number input.";
		}
		
		if(empty($errors)) {
			
			//	Upload slip into uploads folder
			$targetFile = $uploadFileDir . basename($paymentTransactionSlip['name']);
			$uploadingFile = move_uploaded_file($paymentTransactionSlip["tmp_name"], $targetFile);
			
			
			//	Save payment info into db
			$sql = "	INSERT INTO `payments` (
							`parentsId`, 
							`paymentType`, 
							`paymentValue`, 
							`paymentDate`, 
							`firstName`, 
							`lastName`, 
							`contact`, 
							`email`, 
							`paymentSlip`
					)
					VALUES (
							'".$_SESSION['parentId']."',
							'".$paymentType."',
							'".$paymentValue."',
							'".date('Y-m-t H:i:s', strtotime($paymentYear."-".$paymentMonth."-01"))."',
							'".$paymentFirstName."',
							'".$paymentLastName."',
							'".$paymentContactNumber."',
							'".$paymentEmail."',
							'".basename($paymentTransactionSlip['name'])."'
					)";
					
			$save = mysqli_query($con, $sql);
			
			if($save) {
				
				$errors = [];
			}
			else {
				
				$errors[] = 'Failed to make the camp payment. Please try again.';
			}
		}
		
		if(empty($errors)) {
			
			$success[] = 'You have successfully make payment of the camp ';
		}
	}

?>