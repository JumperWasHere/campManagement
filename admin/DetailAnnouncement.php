<?php 
session_start();
include('../php/connection.php');

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
  <section class="menu cid-rzEHhYUt8W" once="menu" id="menu1-7">

    

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
                    <a href="adminHome.html">
                         <img src="assets/images/schoolicon.svg" alt="Mobirise" title="" style="height: 4.9rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-secondary display-4" href="adminHome.html"><span class="mbri-github mbr-iconfont mbr-iconfont-btn"></span>TADIKA MUHAMMADI</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="https://mobirise.com">
                        </a>
                </li><li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="ViewTimetable.html" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>
                        
                        Timetable</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="ViewTimetable.html">View Timetable</a><a class="text-white dropdown-item display-4" href="EditTimetable.html" aria-expanded="false">Edit Timetable</a></div>
                </li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-help mbr-iconfont mbr-iconfont-btn"></span>Announcement &nbsp;&nbsp;</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="viewAnnouncementage3.html" aria-expanded="true">View Announcement</a><a class="text-white dropdown-item display-4" href="editAnnouncement.html" aria-expanded="true">Edit Announcement</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="https://mobirise.com" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>Student</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="StudentRegistration.html" aria-expanded="false">Register Student</a><a class="text-white dropdown-item display-4" href="StudentDetails.html" aria-expanded="true">Student Details</a></div></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="viewPayment.html" aria-expanded="false" data-toggle="dropdown-submenu"><span class="mbrib-cash mbr-iconfont mbr-iconfont-btn"></span>Payment</a><div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="viewPayment.html" aria-expanded="true">View Payment</a><a class="text-white dropdown-item display-4" href="approvePayment.html" aria-expanded="false">Approve Payment</a></div></li><li class="nav-item"><a class="nav-link link text-white display-4" href="https://mobirise.com" aria-expanded="true"><span class="mbri-unlock mbr-iconfont mbr-iconfont-btn"></span>Logout</a></li></ul>
            
        </div>
    </nav>
</section>


 <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
 
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage as PostImage,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts where tblposts.id='$pid'");
 
 
while ($row=mysqli_fetch_array($query)) {
?>

<br><br><br><br>
<CENTER><div class="card mb-4">
<h1 class="card-title"><?php echo htmlentities($row['posttitle']);?></h1>
<br><br>
           <img class="card-img-top" src="postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?> width="300" height="300" border="0"">
                      <div class="card-body">
                        
        </div></CENTER>	  
		<p class="card-text"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
          <div class="card mb-4">
		  
          
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>
       

      

     

        </div>

        
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

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