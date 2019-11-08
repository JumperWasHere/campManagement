<?php

session_start();
include ('connection.php');


if (isset ($_POST[('name')]) && isset ($_POST[('password')]) )
{
$user_name=$_POST['name']; 
$pass_word=$_POST['password'];

$query = "SELECT * FROM teacher WHERE name='$user_name' and pass ='$pass_word' ";
$result = mysqli_query ($con, $query);


if ( mysqli_num_rows($result)>0)
	{$_SESSION['unn']=$user_name;
		echo "<script type=\"text/javascript\" >
		window.location=\"..\teacher\teacherhome.php\";
		</script>";
header( 'location:../teacher/teacherhome.php') ;

	}

else
	
	echo "<script type=\"text/javascript\" >
		alert(\"Wrong ID or PASSWORD\");
		window.location=\"../teacherlogin.html\";
		</script>"; 
	

}
?>


