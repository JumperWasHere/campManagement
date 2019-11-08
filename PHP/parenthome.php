<?php
session_start();
   if($_SESSION['parentId']==null)
   {
        echo "<script type=\"text/javascript\">
        alert(\"Login First\");
        window.location=\"../index.php\";
        </script>";
   }
   
include ('connection.php');
	
	$agent = $_SESSION['parentId'];
 
	extract($_POST);				

	
?>

