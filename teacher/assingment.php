 <?php
session_start();

include_once("../php/connection.php");
if(!isset($_SESSION['unn']))
{
header("Location: ../index.html");
}
  if(isset($_REQUEST['camp_id']) && $_REQUEST['camp_id'] !=""){
    $course_id= $_REQUEST['camp_id'];
    $query = "DELETE FROM coursedetails WHERE camp_id =".$course_id;
    $delcouse= mysqli_query($con,$query);
    if($delcouse){
        echo "<script>window.location='assingment.php'</script>";
    }

    
  }

?>

<!DOCTYPE html>
<html  >
<head>

<link href="css/modern-business.css" rel="stylesheet">

  <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/schoolicon.svg" type="image/x-icon">
  <meta name="description" content="">
  
  <title>viewAnnouncement</title>
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

<br><br><br><br>
<center><h1>Student's Camp </h1></center>
<div class="container">
<br>  
  <center><div class="row">
    <center><div class="col-12" >
      <table class="table table-bordered" style="border-color: #000;background-color: #f8f9fa;">
        <thead>
        <tr>
          <th>NO</th>
		      <th>PLACE</th>
          <th>CAMP NAME</th>
          <th>PRICE</th>
          <th>CAMP DATE START</th>
          <th>CAMP DATE END</th>
          <th>DETAIL</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          <?php 
          $query = "SELECT * FROM coursedetails ORDER BY dateStart ASC";
          $result = mysqli_query($con,$query);
          $sn=1;
          while($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
			
		     	<td><?php echo $row['camp_venue']; ?></td>
            
            <td><?php echo $row['camp_name']; ?></td>

            <td><?php echo $row['price']; ?></td>  

            <td><?php echo $row['dateStart']; ?></td>

            <td><?php echo $row['dateEnd']; ?></td>
        
            <td><?php echo $row['camp_details']; ?></td>  
			
			
       
            <td><a class="navbar-buttons mbr-section-btnr" href="editAssingment.php?camp_id=<?php echo $row['camp_id']?>">Edit</a></td>
            <td><a class="navbar-buttons mbr-section-btnr" href="assingment.php?camp_id=<?php echo $row['camp_id']?>">Delete</a></td>
          </tr>

      <?php 
        $sn++ ;
      } ?>


        </tbody>
      </table><br>
    </div></center>
  </div></center>
</div></div>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>


  <section class="engine"><a href="https://mobirise.info/u">bootstrap html templates</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
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