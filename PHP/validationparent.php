<?php

session_start();
include ('connection.php');


if (isset ($_POST[('name')]) && isset ($_POST[('password')]) ){
	
	$user_name=$_POST['name']; 
	$pass_word=$_POST['password'];

	$query = "SELECT * FROM parent WHERE name='$user_name' and pass ='$pass_word' ";
	$result = mysqli_query ($con, $query);


	if ( mysqli_num_rows($result)>0){
		
		while($row = mysqli_fetch_assoc($result)) {
			
			$_SESSION['parentId']=$row['id'];
			$_SESSION['parentName']=$row['name'];
		}
		
		echo "<script type=\"text/javascript\" >
		window.location=\"..\parent\parenthome.php\";
		</script>";
		header( 'location:../parent/parenthome.php') ;
	}
	else {
		
		echo "<script type=\"text/javascript\" >
			alert(\"Wrong ID or PASSWORD , please login agaian\");
			window.location=\"../parentlogin.html\";
			</script>";
	}
}
?>


