
<?php
$slot1column1 = $slot1column2=  $slot1column3=  $slot1column4=  $slot1column5= 
$slot2column1= $slot2column2= $slot2column3=  $slot2column4=  $slot2column5= 
$slot3column1=$slot3column2= $slot3column3=  $slot3column4=  $slot3column5=   
$slot4column1=$slot4column2=  $slot4column3=  $slot4column4=  $slot4column5= 
$slot5column1=$slot5column2=  $slot5column3=  $slot5column4=  $slot5column5= '';


session_start();
include_once '../PHP/connection.php';
// include_once 'connection/server.php';
if(!isset($_SESSION['unn']))
{
header("Location: ../index.html");
}
$usersession = $_SESSION['unn'];

$queryUsersession = "SELECT * FROM teacher WHERE name='" .$usersession . "'";
$res=mysqli_query($con,$queryUsersession);

$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
//$userRow=mysqli_fetch_array($res);

	$teacherIC         = $userRow['id'];

// insert


if (isset($_POST['submit'])) {
$year  = mysqli_real_escape_string($con,$_POST['year']);
$day     = mysqli_real_escape_string($con,$_POST['day']);
$slot1     = mysqli_real_escape_string($con,$_POST['slot1']);
$slot2     = mysqli_real_escape_string($con,$_POST['slot2']);
$slot3     = mysqli_real_escape_string($con,$_POST['slot3']);
$slot4     = mysqli_real_escape_string($con,$_POST['slot4']);
$slot5     = mysqli_real_escape_string($con,$_POST['slot5']);


$id         = $userRow['id'];




$resultCount = mysqli_num_rows(mysqli_query($con, "SELECT *
from timetable
Where id = '$id' AND year ='$year' AND day = '$day';"));
if($resultCount=='1'){
    //Update  trigger id & day

$query = "UPDATE timetable SET slot1='$slot1', slot2='$slot2' , slot3='$slot3' , slot4='$slot4', slot5='$slot5' WHERE id='$id' AND year='$year'AND day='$day' ;";

}
else{


    //INSERT
    $query = " INSERT INTO timetable ( id, year, day, slot1, slot2, slot3,  slot4, slot5)
    VALUES ( '$id', '$year', '$day', '$slot1', '$slot2', '$slot3',  '$slot4', '$slot5') ";
    

}





$result = mysqli_query($con, $query);
// echo $result;
if( $result )
{
?>
<script type="text/javascript">
alert('Schedule added successfully.');
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert('Added fail. Please try again.');
</script>
<?php
}

}
// <!----------------------------------------------------SLOT1----------------------------------------------->
//slot1column1
$yearfilter = 'Class 6';
if (isset($_POST['filter'])) {
    $yearfilter = trim($_POST['filter']);
    $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
            $slot1column1 = $row['slot1']; 
             };
            if (empty ($slot1column1)){
                        $slot1column1 = "";
                    }
        }
else{
  
    $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
         $slot1column1  = $row['slot1'];
    };
}
//slot1column2
    if (isset($_POST['filter'])) {
        $yearfilter = trim($_POST['filter']);
        $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
                $slot1column2 = $row['slot1']; 
                };
                if (empty ($slot1column2)){
                            $slot1column2 = "";
                        }
            }
    else{
    
        $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
            $slot1column2  = $row['slot1'];
        };
    }
//slot1column3
        if (isset($_POST['filter'])) {
            $yearfilter = trim($_POST['filter']);
            $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                    $slot1column3 = $row['slot1']; 
                    };
                    if (empty ($slot1column3)){
                                $slot1column3 = "";
                            }
                }
        else{
        
            $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE year='" .  $yearfilter   ."' AND  id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                $slot1column3  = $row['slot1'];
            };
        }

//slot1column4
            if (isset($_POST['filter'])) {
               $yearfilter = trim($_POST['filter']);
                $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                        $slot1column4 = $row['slot1']; 
                        };
                        if (empty ($slot1column4)){
                                    $slot1column4 = "";
                                }
                    }
            else{
            
                $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE year='" .  $yearfilter   ."' AND  id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                    $slot1column4  = $row['slot1'];
                };
            }

//slot1column5
                if (isset($_POST['filter'])) {
                   $yearfilter = trim($_POST['filter']);
                    $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                            $slot1column5 = $row['slot1']; 
                            };
                            if (empty ($slot1column5)){
                                        $slot1column5 = "";
                                    }
                        }
                else{
                
                    $res = mysqli_query($con,"SELECT `timetable`.`slot1`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND  id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                        $slot1column5  = $row['slot1'];
                    };
                }
// <!----------------------------------------------------SLOT2----------------------------------------------->
//slot2column1
if (isset($_POST['filter'])) {
    $yearfilter = trim($_POST['filter']);
    $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
            $slot2column1 = $row['slot2']; 
             };
            if (empty ($slot2column1)){
                        $slot2column1 = "";
                    }
        }
else{
  
    $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE year='" .  $yearfilter   ."' AND  id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
        $slot2column1  = $row['slot2'];
    };
}
//slot2column2
    if (isset($_POST['filter'])) {
        $yearfilter = trim($_POST['filter']);
        $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
                $slot2column2 = $row['slot2']; 
                };
                if (empty ($slot2column2)){
                            $slot2column2 = "";
                        }
            }
    else{
    
        $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
            $slot2column2  = $row['slot2'];
        };
    }
//slot2column3
        if (isset($_POST['filter'])) {
           $yearfilter = trim($_POST['filter']);
            $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                    $slot2column3 = $row['slot2']; 
                    };
                    if (empty ($slot2column3)){
                                $slot2column3 = "";
                            }
                }
        else{
        
            $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                $slot2column3  = $row['slot2'];
            };
        }

//slot2column4
            if (isset($_POST['filter'])) {
               $yearfilter = trim($_POST['filter']);
                $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                        $slot2column4 = $row['slot2']; 
                        };
                        if (empty ($slot2column4)){
                                    $slot2column4 = "";
                                }
                    }
            else{
            
                $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                    $slot2column4  = $row['slot2'];
                };
            }

//slot2column5
                if (isset($_POST['filter'])) {
                   $yearfilter = trim($_POST['filter']);
                    $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                            $slot2column5 = $row['slot2']; 
                            };
                            if (empty ($slot2column5)){
                                        $slot2column5 = "";
                                    }
                        }
                else{
                
                    $res = mysqli_query($con,"SELECT `timetable`.`slot2`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                        $slot2column5  = $row['slot2'];
                    };
                }
// <!----------------------------------------------------SLOT3----------------------------------------------->
//slot3column1
if (isset($_POST['filter'])) {
    $yearfilter = trim($_POST['filter']);
    $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
            $slot3column1 = $row['slot3']; 
             };
            if (empty ($slot3column1)){
                        $slot3column1 = "";
                    }
        }
else{
  
    $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
        $slot3column1  = $row['slot3'];
    };
}
//slot3column2
    if (isset($_POST['filter'])) {
        $yearfilter = trim($_POST['filter']);
        $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
                $slot3column2 = $row['slot3']; 
                };
                if (empty ($slot3column2)){
                            $slot3column2 = "";
                        }
            }
    else{
    
        $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE  id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
            $slot3column2  = $row['slot3'];
        };
    }
//slot3column3
        if (isset($_POST['filter'])) {
          $yearfilter = trim($_POST['filter']);
            $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                    $slot3column3 = $row['slot3']; 
                    };
                    if (empty ($slot3column3)){
                                $slot3column3 = "";
                            }
                }
        else{
        
            $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE year='" .  $yearfilter   ."' AND  id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                $slot3column3  = $row['slot3'];
            };
        }

//slot3column4
            if (isset($_POST['filter'])) {
              $yearfilter = trim($_POST['filter']);
                $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                        $slot3column4 = $row['slot3']; 
                        };
                        if (empty ($slot3column4)){
                                    $slot3column4 = "";
                                }
                    }
            else{
            
                $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                    $slot3column4  = $row['slot3'];
                };
            }

//slot3column5
                if (isset($_POST['filter'])) {
               $yearfilter = trim($_POST['filter']);
                    $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                            $slot3column5 = $row['slot3']; 
                            };
                            if (empty ($slot3column5)){
                                        $slot3column5 = "";
                                    }
                        }
                else{
                
                    $res = mysqli_query($con,"SELECT `timetable`.`slot3`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                        $slot3column5  = $row['slot3'];
                    };
                }
// <!----------------------------------------------------SLOT4----------------------------------------------->
//slot4column1
if (isset($_POST['filter'])) {
  $yearfilter = trim($_POST['filter']);
    $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
            $slot4column1 = $row['slot4']; 
             };
            if (empty ($slot4column1)){
                        $slot4column1 = "";
                    }
        }
else{
  
    $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
        $slot4column1  = $row['slot4'];
    };
}
//slot4column2
    if (isset($_POST['filter'])) {
      $yearfilter = trim($_POST['filter']);
        $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
                $slot4column2 = $row['slot4']; 
                };
                if (empty ($slot4column2)){
                            $slot4column2 = "";
                        }
            }
    else{
    
        $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
            $slot4column2  = $row['slot4'];
        };
    }
//slot4column3
        if (isset($_POST['filter'])) {
           $yearfilter = trim($_POST['filter']);
            $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                    $slot4column3 = $row['slot4']; 
                    };
                    if (empty ($slot4column3)){
                                $slot4column3 = "";
                            }
                }
        else{
        
            $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                $slot4column3  = $row['slot4'];
            };
        }

//slot4column4
            if (isset($_POST['filter'])) {
                $yearfilter = trim($_POST['filter']);
                $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                        $slot4column4 = $row['slot4']; 
                        };
                        if (empty ($slot4column4)){
                                    $slot4column4 = "";
                                }
                    }
            else{
            
                $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                    $slot4column4  = $row['slot4'];
                };
            }

//slot4column5
                if (isset($_POST['filter'])) {
                  $yearfilter = trim($_POST['filter']);
                    $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                            $slot4column5 = $row['slot4']; 
                            };
                            if (empty ($slot4column5)){
                                        $slot4column5 = "";
                                    }
                        }
                else{
                
                    $res = mysqli_query($con,"SELECT `timetable`.`slot4`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                        $slot4column5  = $row['slot4'];
                    };
                }
// <!----------------------------------------------------SLOT5----------------------------------------------->
//slot5column1
if (isset($_POST['filter'])) {
   $yearfilter = trim($_POST['filter']);
    $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
            $slot5column1 = $row['slot5']; 
             };
            if (empty ($slot5column1)){
                        $slot5column1 = "";
                    }
        }
else{
  
    $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Monday';");  
	while ($row = mysqli_fetch_array($res)){
        $slot5column1  = $row['slot5'];
    };
}
//slot5column2
    if (isset($_POST['filter'])) {
       $yearfilter = trim($_POST['filter']);
        $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
                $slot5column2 = $row['slot5']; 
                };
                if (empty ($slot5column2)){
                            $slot5column2 = "";
                        }
            }
    else{
    
        $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Tuesday';");  
        while ($row = mysqli_fetch_array($res)){
            $slot5column2  = $row['slot5'];
        };
    }
//slot5column3
        if (isset($_POST['filter'])) {
           $yearfilter = trim($_POST['filter']);
            $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                    $slot5column3 = $row['slot5']; 
                    };
                    if (empty ($slot5column3)){
                                $slot5column3 = "";
                            }
                }
        else{
        
            $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND  id='" .  $teacherIC   ."'  AND day = 'Wednesday';");  
            while ($row = mysqli_fetch_array($res)){
                $slot5column3  = $row['slot5'];
            };
        }

//slot5column4
            if (isset($_POST['filter'])) {
                $yearfilter = trim($_POST['filter']);
                $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                        $slot5column4 = $row['slot5']; 
                        };
                        if (empty ($slot5column4)){
                                    $slot5column4 = "";
                                }
                    }
            else{
            
                $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND  id='" .  $teacherIC   ."'  AND day = 'Thursday';");  
                while ($row = mysqli_fetch_array($res)){
                    $slot5column4  = $row['slot5'];
                };
            }

//slot5column5
                if (isset($_POST['filter'])) {
                    $yearfilter = trim($_POST['filter']);
                    $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE year='" .  $yearfilter   ."'  AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                            $slot5column5 = $row['slot5']; 
                            };
                            if (empty ($slot5column5)){
                                        $slot5column5 = "";
                                    }
                        }
                else{
                
                    $res = mysqli_query($con,"SELECT `timetable`.`slot5`FROM `timetable` WHERE  year='" .  $yearfilter   ."' AND id='" .  $teacherIC   ."'  AND day = 'Friday';");  
                    while ($row = mysqli_fetch_array($res)){
                        $slot5column5  = $row['slot5'];
                    };
                }
?>

<!DOCTYPE html>
<html lang="en">
   <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TADIKA MUHAMMADI</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<script src="JS/bootstrap.min.js" ></script>
<script src="JS/respond.min.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

  
  
</head>

    <body>
        <div id="wrapper">

            <!-- Navigation -->
			
            <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="adminHome.php">
                         <img src="assets/images/schoolicon.svg" alt="Mobirise" title="" style="height: 4.9rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="teacherhome.php"><span class="mbri-github mbr-iconfont mbr-iconfont-btn"></span>TADIKA MUHAMMADI</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#">
                        </a>
                </li><li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="ViewTimetable.php" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Timetable</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="ViewTimetable.php">View Timetable</a><a class="text-white dropdown-item display-4" href="editAnnouncement.php">Edit Timetable</a></div>
                </li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>Announcement &nbsp;&nbsp;</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="viewAnnouncement.php" aria-expanded="false">View Announcement</a><a class="text-white dropdown-item display-4" href="editAnnouncement.php" aria-expanded="false">Edit Announcement</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="addAssingment.php" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>Homework</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="addAssingment.php" aria-expanded="false">Add Homework</a><a class="text-white dropdown-item display-4" href="assingment.php" aria-expanded="false">View Homework</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="StudentRegistration.php" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Student</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="StudentRegistration.php" aria-expanded="true">Register Student</a><a class="text-white dropdown-item display-4" href="StudentDetails.php" aria-expanded="true">Student Detail</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="viewPayment.php" aria-expanded="true" data-toggle="dropdown-submenu"><span class="mbrib-cash mbr-iconfont mbr-iconfont-btn"></span>Payment</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="viewPayment.php" aria-expanded="false">View Payment</a><a class="text-white dropdown-item display-4" href="approvePayment.php" aria-expanded="false">Approve Payment</a></div></li><li class="nav-item"><a class="nav-link link text-white display-4" href="../php/logout.php" aria-expanded="false"><span class="mbri-unlock mbr-iconfont mbr-iconfont-btn"></span>Logout</a></li></ul>
            
        </div>
    </nav>
</section>

        <br><br><br><br><br>    <!-- navigation end -->

            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header">
                            Timetable
                            </h2>
                            
                        </div>
                    </div>
                    <!-- Page Heading end-->

                    <!-- panel start -->
                    <div class="panel panel-primary">

                        <!-- panel heading starat -->
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Timetable</h3>
                        </div>
                        <!-- panel heading end -->

                        <div class="panel-body">
                        <!-- panel content start -->
                            <div class="bootstrap-iso">
                             <div class="container-fluid">
                              <div class="row">
                               <div class="col-md-12 col-sm-12 col-xs-12">
                                <form class="form-horizontal" method="post">
                                 <div class="form-group form-group-lg">
                                
                                  <div class="col-sm-10">
                                  
                                  </div>
                                 </div>
								  <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="year">
                                 year
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                   <select class="select form-control" id="year" name="year"  required>
                                   <option value="">
                                   
                                    </option>
									 <option value="">
                                     ...
                                    </option>
								   <option value="Class 6">
                                     Class 6
                                    </option>
                                    <option value="Class 5">
                                    Class 5
                                    </option>
                                    
                                   </select>
                                  </div>
                                 </div>
								 
								 
                                 <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="scheduleday">
                                   Day
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                   <select class="select form-control" id="scheduleday" name="day"  required>
                                   <option value="">
                                   
                                    </option>
								   <option value="Monday">
                                     Monday
                                    </option>
                                    <option value="Tuesday">
                                     Tuesday
                                    </option>
                                    <option value="Wednesday">
                                     Wednesday
                                    </option>
                                    <option value="Thursday">
                                     Thursday
                                    </option>
                                    <option value="Friday">
                                     Friday
                                    </option>
                                  
                                   
                                   </select>
                                  </div>
                                 </div>
								 	 
                                 
                          
                                 <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="slot1">
                                   Slot 1 -> 8.30am - 9.30am
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                   <select class="select form-control" id="slot1" name="slot1">
                                   <option value="">
                                    
                                    </option>
								   <option value="BAHASA MELAYU">
                                    BAHASA MELAYU
                                    </option>
                                    <option value="MATEMATIK">
                                    MATEMATIK
                                    </option>
									<option value="ENGLISH">
                                    ENGLISH
                                    </option>
									<option value="PENDIDIKAN SOSIAL">
                                    PENDIDIKAN SOSIAL
                                    </option>
									 <option value="REHAT">
                                    REHAT
                                    </option> 
                                   </select>
                                  </div>
                                 </div>
								 
								   <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="slot2">
                                   Slot 2 -> 9.30am - 10.30am
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                   <select class="select form-control" id="slot2" name="slot2" >
                                    <option value="">
                                    
                                    </option>
								   <option value="BAHASA MELAYU">
                                    BAHASA MELAYU
                                    </option>
                                    <option value="MATEMATIK">
                                    MATEMATIK
                                    </option>
									<option value="ENGLISH">
                                    ENGLISH
                                    </option>
									<option value="PENDIDIKAN SOSIAL">
                                    PENDIDIKAN SOSIAL
                                    </option>
									 <option value="REHAT">
                                    REHAT
                                    </option>
                                   </select>
                                  </div>
                                 </div>
								 
								  <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="slot3">
                                   Slot 3 -> 10.30am - 11.30am
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                   <select class="select form-control" id="slot3" name="slot3" >
                                    <option value="">
                                    
                                    </option>
								   <option value="BAHASA MELAYU">
                                    BAHASA MELAYU
                                    </option>
                                    <option value="MATEMATIK">
                                    MATEMATIK
                                    </option>
									<option value="ENGLISH">
                                    ENGLISH
                                    </option>
									<option value="PENDIDIKAN SOSIAL">
                                    PENDIDIKAN SOSIAL
                                    </option>
									 <option value="REHAT">
                                    REHAT
                                    </option>
                                   </select>
                                  </div>
                                 </div>
								 
								  <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="slot4">
                                   Slot 4 -> 11.30am - 12.30pm
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                   <select class="select form-control" id="slot4" name="slot4" >
                                    <option value="">
                                    
                                    </option>
								   <option value="BAHASA MELAYU">
                                    BAHASA MELAYU
                                    </option>
                                    <option value="MATEMATIK">
                                    MATEMATIK
                                    </option>
									<option value="ENGLISH">
                                    ENGLISH
                                    </option>
									<option value="PENDIDIKAN SOSIAL">
                                    PENDIDIKAN SOSIAL
                                    </option>
									 <option value="REHAT">
                                    REHAT
                                    </option> 
                                   </select>
                                  </div>
                                 </div>
								 
								   <div class="form-group form-group-lg">
                                  <label class="control-label col-sm-2 requiredField" for="slot4">
                                   Slot 5 -> 12.30am - 1.30pm
                                   <span class="asteriskField">
                                    *
                                   </span>
                                  </label>
                                  <div class="col-sm-10">
                                   <select class="select form-control" id="slot5" name="slot5" >
                                    <option value="">
                                    
                                    </option>
								   <option value="BAHASA MELAYU">
                                    BAHASA MELAYU
                                    </option>
                                    <option value="MATEMATIK">
                                    MATEMATIK
                                    </option>
									<option value="ENGLISH">
                                    ENGLISH
                                    </option>
									<option value="PENDIDIKAN SOSIAL">
                                    PENDIDIKAN SOSIAL
                                    </option>
									 <option value="REHAT">
                                    REHAT
                                    </option> 
                                   </select>
                                  </div>
                                 </div>
								
								 
								 
                                 <div class="form-group">
                                  <div class="col-sm-10 col-sm-offset-2">
                                   <button class="btn btn-primary " name="submit" type="submit">
                                    Submit
                                   </button>
                                  </div>
                                 </div>
                                </form>
                               </div>
                              </div>
                             </div>
                            </div>                        
                        <!-- panel content end -->
                        <!-- panel end -->
                        </div>
                    </div>
                    <!-- panel start -->

                     <!-- panel start -->
                     <form action="EditTimetable.php" method="post">
                    <div class="panel panel-primary filterable">
                    <input type="submit" name="filter" value="Class 6" class="btn btn-info">
                    <input type="submit" name="filter" value="Class 5" class="btn btn-info">

                        <!-- panel heading starat 
                        <div class="panel-heading">
                            <h3 class="panel-title">Timetable</h3>
                            <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
                        </div>-->
                        </div>
                        <!-- panel heading end -->

                        <div class="panel-body">
                        <!-- panel content start -->
                           <!-- Table -->
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="filters" bgcolor='#CCCCCC'>
                                  <th><input type="text" class="form-control" placeholder=" " disabled></th>
                                  <th><input type="text" class="form-control" placeholder="Monday" disabled></th>
                                  <th><input type="text" class="form-control" placeholder="Tuesday" disabled></th>
                                  <th><input type="text" class="form-control" placeholder="Wednesday" disabled></th>
                                  <th><input type="text" class="form-control" placeholder="Thursday" disabled></th>
                                  <th><input type="text" class="form-control" placeholder="Friday" disabled></th>
								  
								</tr>	
								 
							
							<tr>
									<td><b> 8.30am - 9.30am </td>
									<td> 
									<?php echo  $slot1column1 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot1column2 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot1column3 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot1column4 ; ?>
									</td>
									
									<td> 
									<?php echo $slot1column5 ; ?>
									</td>
								</tr>
								<!----------------------------------------------------SLOT1----------------------------------------------->
								<!----------------------------------------------------SLOT1----------------------------------------------->
								<tr>
									<td><b>9.30am - 10.30am </td>
									<td> 
                                    <?php echo $slot2column1 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot2column2 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot2column3 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot2column4 ; ?>
									</td>
									
									
									<td> 
                                    <?php echo $slot2column5 ; ?>
									</td>
								</tr>
								
								<!----------------------------------------------------SLOT2----------------------------------------------->
								<!----------------------------------------------------SLOT2----------------------------------------------->
								<tr>
									<td><b>10.30am - 11.30am </td>
									<td> 
                                    <?php echo $slot3column1 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot3column2 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot3column3 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot3column4 ; ?>
									</td>
									
									
									<td> 
                                    <?php echo $slot3column5 ; ?>
									</td>
								</tr>
								
								
								<!----------------------------------------------------SLOT3----------------------------------------------->
								<!----------------------------------------------------SLOT3----------------------------------------------->
								<tr>
									<td><b>11.30am - 12.30am </td>
									<td> 
                                    <?php echo $slot4column1 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot4column2 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot4column3 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot4column4 ; ?>
									</td>
									
									
									<td> 
                                    <?php echo $slot4column5 ; ?>
									</td>
								</tr>
								
								
								<!----------------------------------------------------SLOT4----------------------------------------------->
								<!----------------------------------------------------SLOT4----------------------------------------------->
								<tr>
									<td><b>12.30pm - 1.30pm </td>
									<td> 
                                    <?php echo $slot5column1 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot5column2 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot5column3 ; ?>
									</td>
									
									<td> 
                                    <?php echo $slot5column4 ; ?>
									</td>
									
									
									<td> 
                                    <?php echo $slot5column5 ; ?>
									</td>
								</tr>
								
								
								<!----------------------------------------------------SLOT5----------------------------------------------->
								<!----------------------------------------------------SLOT5----------------------------------------------->
						
								
								
								
								
							 </thead>
								
							 
								
                          </table>
                            
                           
                        <!-- panel content end -->
                        <!-- panel end -->
                        </div>
                    </div>
                    <!-- panel start -->
                </div>
            </div>
        <!-- /#wrapper -->
                                    </form>

       
        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-clockpicker.js"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy/mm/dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
<script type="text/javascript">
    $('.clockpicker').clockpicker();
</script>
 <script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var id = element.attr("id");
var info = 'id=' + id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "deleteschedule.php",
   data: info,
   success: function(){
 }
});
  $(this).parent().parent().fadeOut(300, function(){ $(this).remove();});
 }
return false;
});
});
</script>
<script type="text/javascript">
            /*
            Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
            */
            $(document).ready(function(){
                $('.filterable .btn-filter').click(function(){
                    var $panel = $(this).parents('.filterable'),
                    $filters = $panel.find('.filters input'),
                    $tbody = $panel.find('.table tbody');
                    if ($filters.prop('disabled') == true) {
                        $filters.prop('disabled', false);
                        $filters.first().focus();
                    } else {
                        $filters.val('').prop('disabled', true);
                        $tbody.find('.no-result').remove();
                        $tbody.find('tr').show();
                    }
                });

                $('.filterable .filters input').keyup(function(e){
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                    inputContent = $input.val().toLowerCase(),
                    $panel = $input.parents('.filterable'),
                    column = $panel.find('.filters th').index($input.parents('th')),
                    $table = $panel.find('.table'),
                    $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function(){
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                    }
                });
            });
        </script>

  <section class="engine"><a href="https://mobirise.info/r">bootstrap template</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/theme/js/script.js"></script>
    </body>
</html>