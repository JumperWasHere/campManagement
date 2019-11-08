<?php
include('connection.php');
	session_start();

	  $name = $_POST['name'];
      $phoneno = $_POST['phoneno'];
      $pass = $_POST['pass'];
;

        $joinedDate = date("Y/m/d");
		
$last_inserted_row = mysqli_insert_id($con);
                        $insert = $con->query("INSERT INTO parent(id, name, phoneno, pass)"
                        . "VALUES ('$last_inserted_row', '$name', '$phoneno', '$pass')");



                    if ($insert){
           						$_SESSION['success'] = '';
           					echo "<script type='text/javascript'>alert('Thank You for to be part of Tadika Muhammadi  You are now can directly login to Tadika  Muhammadi');
                			window.location='../parentlogin.html';
                				</script>";
       							}
       					else {
         						echo "<script type='text/javascript'>alert('Error');
              				window.location='../parentlogin.html';
              				</script>";
										}
         ?>
