<?php  

session_start();
include_once("../php/connection.php");

if(!isset($_SESSION['unn']))
{
header("Location: ../index.html");
}
if(isset($_POST['Save']) && $_POST['campName'] !=""){
  
  $campVenue     = $_POST['campVenue'];
  
  $campName     = $_POST['campName'];
//   $new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
  $dateStart       = date("Y-m-d",strtotime($_POST['examdatestart']));
  
  $datEend       = date("Y-m-d",strtotime($_POST['examdateend']));
  
  $campDetails   = $_POST['campDetails'];
  
  $quantity = $_POST['quantity'];

  $price = $_POST['price'];



  $query = "INSERT INTO coursedetails (camp_venue, camp_name, dateStart , dateEnd, camp_details, MaxParticipant, price)
   VALUES('$campVenue','$campName','$dateStart','$datEend','$campDetails', $quantity, $price)";

   $q = mysqli_query($con,$query);
 
   if($q){
      echo "<script>alert('Homework Added Successfully;')</script>";
      echo "<script>window.location='assingment.php'</script>";
   }else{
    $error = addslashes(mysqli_error($con));
        echo "<script>alert('An Error occur: {$error} ');</script>";
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

<br><br><br>

<div class="container">

<br>

<br>

<div class="container">
        <center><h1 class="col-sm-offset-2">Add Student's Camp</h1>
</div>
<br><br>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">



                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
<form name="addpost" method="post" enctype="multipart/form-data">

 <div class="form-group m-b-20">
<h4 class="m-b-30 m-t-0 header-title"><b>Camp Venue</b></h4><br> 

                                   <select class="select form-control" id="campVenue" name="campVenue" required="" placeholder="Venue">
                                   
								   <option value="Port Dickson">
								   Port Dickson
                                    </option>
                                    <option value="Klang">
                                    Klang
                                    </option>
									
                                   </select>
                               
</div>

 <div class="form-group m-b-20">
<h4 class="m-b-30 m-t-0 header-title"><b>Camp Name</b></h4><br> 

                                   <select class="select form-control" id="campName" name="campName" required="" placeholder="CAMP">
                                   
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

<br> 

<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Details</b></h4><br> 
<textarea class="form-control" name="campDetails" id="campDetails" required></textarea>
</div>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Camp Date Start</b></h4><br> 
<input type="date" name="examdatestart" id="examdatestart" class="form-control" required="" placeholder="Camp Date Start">

</div>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Camp Date End</b></h4><br> 
<input type="date" name="examdateend" id="examdateend" class="form-control" required="" placeholder="Camp Date End">

</div>
</div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Camp Max Participant </b></h4><br> 
<input type="text" name="quantity" id="quantity" placeholder="Max Participant" required="" class="form-control" />
</div>
</div>
</div>
<br><br>
<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Price</b></h4><br> 
<input type="text" name="price" id="price" placeholder="Max Participant" required="" class="form-control" />

</div>
</div>
</div>

<br>
<center>
  <div class="col-md-12 input-group-btn align-center">
        <input type="submit" name="Save" value="Add New " class="btn btn-primary btn-form display-4"  />
		
      </div>
	  
 </center>
 <br><br>
                                        </form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

           

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


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
<?php

?>