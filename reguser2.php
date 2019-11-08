<?php
include('php/connection.php');
	session_start();

      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $icnumber = $_POST['icnumber'];
      $phoneno = $_POST['phoneno'];
      $name = $_POST['name'];
      $pass = $_POST['pass'];
      $street = $_POST['street'];
      $state = $_POST['state'];
      $city = $_POST['city'];
      $postcode = $_POST['postcode'];

        $joinedDate = date("Y/m/d");

                        $insert = $con->query("INSERT INTO parentdetail(firstname, lastname, phoneno, name, street_name, state, city, postcode, ic_number, pass)"
                        . "VALUES ('$firstname', '$lastname', '$phoneno', '$name', '$street', '$state', '$city', '$postcode', '$icnumber', '$pass')");

                         $last_inserted_row = mysqli_insert_id($con);
                         $insert2 = $con->query("INSERT INTO parent(name, pass, id)"
												 . "VALUES ('$name', '$pass', '$last_inserted_row')");


                    if ($insert && $insert2){
           						$_SESSION['success'] = '';
           					echo "<script type='text/javascript'>alert('Thank You for to be part of Tadika Muhammadi Member. You are now can directly login to Tadika Muhammadi System');
                			window.location='parentLogin.html';
                				</script>";
       							}
       					else {
         						echo "<script type='text/javascript'>alert('Error');
              				window.location='reguser.html';
              				</script>";
										}
         ?>
