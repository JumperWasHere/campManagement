 <?php
session_start();

include_once("../php/connection.php");
if(!isset($_SESSION['parentId']))
{
header("Location: ../index.html");
}
  if(isset($_REQUEST['course_id']) && $_REQUEST['course_id'] !=""){
    $course_id= $_REQUEST['course_id'];
    $query = "DELETE FROM coursedetails WHERE course_id =".$course_id;
    $delcouse= mysqli_query($conn,$query);
    if($delcouse){
        echo "<script>window.location='exam-list.php'</script>";
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
                    <a href="parenthome.php">
                         <img src="assets/images/schoolicon.svg" alt="Mobirise" title="" style="height: 4.2rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="parenthome.php"><span class="mbri-github mbr-iconfont mbr-iconfont-btn"></span>CAMP MANAGEMENT SYSTEM</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="">
                        </a>
                </li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>Announcement &nbsp;&nbsp;</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="viewAnnouncement.php" aria-expanded="false">View Announcement</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Camp</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="assingment.php" aria-expanded="true">View Camp</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="viewPayment.html" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbrib-cash mbr-iconfont mbr-iconfont-btn"></span>Payment</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="viewPayment.php" aria-expanded="false">View Payment</a><a class="text-white dropdown-item display-4" href="makePayment.php" aria-expanded="false">Make Payment</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" aria-expanded="true" data-toggle="dropdown-submenu"><span class="mbri-users mbr-iconfont mbr-iconfont-btn"></span>Parent</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="editprofile.php" aria-expanded="false">Parent's Profile</a><a class="text-white dropdown-item display-4" href="editStudentProfile.php" aria-expanded="false">Student's Profle</a><a class="text-white dropdown-item display-4" href="studentRegistration.php" aria-expanded="false">Register Student</a></div></li></ul>
            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-secondary display-4" href="../php/logout.php">  
                    LOGOUT
                </a></div>
        </div>
    </nav>
</section>
<br><br><BR> <BR>

<center><h1>Student's Camp </h1>
 <BR> <BR>
  <div class="row">
   <div class="container scroll" >
     <table align="right" class="table table-bordered" style="border-color: #000;background-color: #f8f9fa;">
        <thead>
        <tr>
          <th>NO</th>
		  <th>PLACE</th>
          <th>CAMP NAME</th>
          <th>DETAIL</th>
		  <th>CAMP DATE</th>
          
        </tr>
        </thead>
        <tbody>
          <?php 
          $query = "SELECT * FROM coursedetails ORDER BY coursecode ASC";
          $result = mysqli_query($con,$query);
          $sn=1;
          while($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
			
			<td><?php echo $row['coursecode']; ?></td>
            
            <td><?php echo $row['course_name']; ?></td>
        
            <td><?php echo $row['exam_location']; ?></td>  
			
			<td><?php echo $row['exam_date']; ?></td>
       
           
          </tr>

      <?php 
        $sn++ ;
      } ?>


        </tbody>
      </table><br>
    </div></center></center>
  </div></center>
</div>
 <BR> <BR> <BR> <BR> <BR>
<section class="cid-rFn7jCBSfN mbr-reveal mbr-parallax-background" id="footer1-1c">

    <BR>

    <div class="mbr-overlay" style="background-color: rgb(35, 35, 35); opacity: 0.9;"></div>

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-3 col-md-3">
                <div class="media-wrap">
                    
                        <BR><img src="assets/images/schoolicon-1-150x135.png" alt="TADIKA MUHAMMADI" title="TADIKA MUHAMMADU">
                    
                </div>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    TADIKA MUHAMMADI SYSTEM</h5>
                <p class="mbr-text">Tadika Muhammadi System is about enhancing the relations between the Parents and Tadika Muhammadi Teachers.&nbsp;</p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email:<br>tadikamuhammadi@gmail.com                    <br>Phone: +(60)13-933 8856 
                    <br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">&nbsp;Quick Links
                </h5>
                <p class="mbr-text"><a href="programme.html">About Us&nbsp;</a><br><a class="text-primary" href="programme.html">Our Programme</a><br><a class="text-primary" href="programme.html">Admin</a></p>
            </div>
			
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2018 Tadika Muhammadi Preschool System - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
</section>
    <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script async src="assets/smoothscroll/smooth-scroll.js"></script>
  <script async src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script async src="assets/tether/tether.min.js"></script>
  <script async src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script async src="assets/dropdown/js/nav-dropdown.js"></script>
  <script async src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script async src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script async src="assets/parallax/jarallax.min.js"></script>
  <script async src="assets/theme/js/script.js"></script>
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>

     <?php  ?>  