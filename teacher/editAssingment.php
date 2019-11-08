<?php  

session_start();
include_once("../php/connection.php");
if(!isset($_SESSION['unn']))
{
header("Location: ../index.html");
}
if(isset($_POST['courseid']) && $_POST['courseid']!=''){

  $courseid       =$_POST['courseid'];
  $coursecode     = $_POST['coursecode'];
  $coursename     = $_POST['coursename'];
  $examdate       = $_POST['examdate'];
  $examlocation   = $_POST['examlocation'];



   $query = "UPDATE coursedetails SET coursecode= '$coursecode', course_name='$coursename', exam_date='$examdate', exam_location='$examlocation' WHERE course_id=".$courseid; 

//exit;
  $qupd = mysqli_query($con,$query);
  if($qupd){
	  echo "<script>alert('Camp Updated Successfully')</script>";
    echo "<script>window.location='assingment.php'</script>";
  }
  
}


?>


<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/schoolicon.svg" type="image/x-icon">
  <meta name="description" content="">
  <br><br><br><br><br>
  <title>TeacherHome</title>
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
  <link href="default1.css" rel="stylesheet" type="text/css" media="all" />
  
  
</head>
<body>
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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="teacherhome.php"><span class="mbri-github mbr-iconfont mbr-iconfont-btn"></span>CAMP MANAGEMENT SYSTEM</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="#">
                        </a>
                </li><li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="ViewTimetable.php" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Book Camp</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="ViewTimetable.php">View Booking</a><a class="text-white dropdown-item display-4" href="editAnnouncement.php">Book Camp</a></div>
                </li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="#" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>Announcement &nbsp;&nbsp;</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="viewAnnouncement.php" aria-expanded="false">View Announcement</a><a class="text-white dropdown-item display-4" href="editAnnouncement.php" aria-expanded="false">Edit Announcement</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="addAssingment.php" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>CAMP</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="addAssingment.php" aria-expanded="false">Add New Camp</a><a class="text-white dropdown-item display-4" href="assingment.php" aria-expanded="false">View Camp</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="StudentRegistration.php" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Student</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="StudentRegistration.php" aria-expanded="true">Register Student</a><a class="text-white dropdown-item display-4" href="StudentDetails.php" aria-expanded="true">Student Detail</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="viewPayment.php" aria-expanded="true" data-toggle="dropdown-submenu"><span class="mbrib-cash mbr-iconfont mbr-iconfont-btn"></span>Payment</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="viewPayment.php" aria-expanded="false">View Payment</a><a class="text-white dropdown-item display-4" href="approvePayment.php" aria-expanded="false">Approve Payment</a></div></li><li class="nav-item"><a class="nav-link link text-white display-4" href="../php/logout.php" aria-expanded="false"><span class="mbri-unlock mbr-iconfont mbr-iconfont-btn"></span>Logout</a></li></ul>
            
        </div>
    </nav>
</section>


<center><div class="col-9"><h1>UPDATE CAMP</h1>  


<?php



if(isset($_GET['course_id']) && $_GET['course_id'] !=''){
  $courseid= $_GET['course_id'];

   $query = "SELECT course_id,coursecode,course_name,exam_date, exam_location FROM coursedetails WHERE course_id=".$courseid;

  $result= mysqli_query($con,$query);

  $record = mysqli_num_rows($result);

  if($record =="" || $record ==0){
	  
    echo "<script>window.location='assingment.php'</script>";
    exit();
  }
  $row = mysqli_fetch_assoc($result);
 
?>

<br><br>
    <form class="form-group" method="post">
      <input type="hidden" name="courseid" id="courseid" value="<?php echo $row['course_id'] ?>">
	   <div class="form-group m-b-20">
<br> 

                                  <select class="select form-control" id="coursecode" name="coursecode" required="" placeholder="Venue">
                                   
								   <option value="Port Dickson">
								   Port Dickson
                                    </option>
                                    <option value="Klang">
                                    Klang
                                    </option>
									
                                   </select>
                               
</div>
  <div class="form-group m-b-20">
<br> 

                                 <select class="select form-control" id="coursename" name="coursename" required="" placeholder="CAMP">
                                   
								   <option value="MOTIVATIONAL CAMP">
                                    MOTIVATIONAL CAMP
                                    </option>
                                    <option value="CLUB CAMP">
                                    CLUB CAMP
                                    </option>
									<option value="LANGUAGE CAMP">
                                     LANGUAGE CAMP
                                    </option>
									<option value="DEBATE CAMP ">
                                    DEBATE CAMP 
                                    </option>
								
                                   </select>
                               
</div>
  <div class="row" style="margin-bottom: 10px">
    <div class="col" >
      <input type="date" name="examdate" value="<?php echo $row['exam_date'] ?>" id="examdate" class="form-control" required="" placeholder="CAMP DATE">
    </div>
  
    <div class="col-4" >
      <input type="text" name="examlocation" value="<?php echo $row['exam_location'] ?>" id="examlocation" class="form-control" required=""  placeholder="CAMP DETAIL">
    </div>
    
  </div>
  <div class="col-md-12 input-group-btn align-center">
        <input type="submit" name="Save" value="Update " class="btn btn-primary" style="background-color: #179b77; border-color:#179b77 " />
      </div>
</form>

<?php } else

echo "<script>window.location='assingment.php'</script>";

 ?>
</div>


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
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
