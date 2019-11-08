 <?php
    include('../php/connection.php');
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

      $update = $con->query("UPDATE studentdetail SET firstName = '$firstName', lastName = '$lastName', fatherName = '$fatherName', motherName = '$motherName', birthdate = '$birthdate', gender = '$gender', dept = '$dept',
          permanentAddress = '$permanentAddress', phone = '$phone', email = '$email' WHERE id = '".$_SESSION['parentId']."'");
          if ($update){
          $_SESSION['success'] = '';
          echo "<script type='text/javascript'>alert('Your profile are successfully updated.');
            window.location='editstudentprofile.php';
              </script>";
          }
          else {
          echo "<script type='text/javascript'>alert('Error!');
            window.location='editstudentprofile.php';
            </script>";
          }

?>
