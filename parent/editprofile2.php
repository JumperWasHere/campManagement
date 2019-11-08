 <?php
    include('../php/connection.php');
	session_start();

        $id = $_SESSION['parentId'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phoneno = $_POST['phoneno'];
        $name = $_POST['name'];
        $street_name = $_POST['street_name'];
        $state = $_POST['state'];
        $city= $_POST['city'];
        $postcode = $_POST['postcode'];
        $ic_number = $_POST['ic_number'];
        $pass = $_POST['pass'];

      $update = $con->query("UPDATE parentdetail SET firstname = '$firstname', lastname = '$lastname', phoneno = '$phoneno', name = '$name', street_name = '$street_name', state = '$state', city = '$city',
          postcode = '$postcode', ic_number = '$ic_number', pass = '$pass' WHERE id = '".$_SESSION['parentId']."'");
          if ($update){
          $_SESSION['success'] = '';
          echo "<script type='text/javascript'>alert('Your profile are successfully updated.');
            window.location='editprofile.php';
              </script>";
          }
          else {
          echo "<script type='text/javascript'>alert('Error!');
            window.location='editprofile.php';
            </script>";
          }

?>
