
<?php
    session_start();
   if($_SESSION['unn']==null)
   {
        echo "<script type=\"text/javascript\">
        alert(\"Login First\");
        window.location=\"index.php\";
        </script>";
   }
   else if ($_SESSION['unn']!=null)
   {
	 
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
  <meta name="description" content="Website Creator Description">
  
  <title>StudentRegistration</title>
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



        
        <br><br>
 <br><br> <br><br>
          <br>
        <center><h1 class="col-sm-offset-2">Student Registration Form</h1><hr size="100" width="40%" align="center" color="green"></center>
    

<br><br>
  <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="..\PHP\studentRegistration2.php" method="POST" class="mbr-form form-with-styler">
                    <div class="row">
                        
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
					
                        <div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="studentId">Student ID:</label>
  		
    <input type="text" disabled="disabled" class="form-control display-7 display-7" name="studentId" placeholder="Auto Added">
   		
    </div>
  
  	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="firstName">First Name:</label>
  		
    <input type="text" class="form-control display-7 display-7" name="firstName" placeholder="Enter First Name" required="required">
   		
    </div>
  
  	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="lastName">Last Name:</label>
  		
    <input type="text" class="form-control display-7 display-7" name="lastName" placeholder="Enter Last Name" required="required">
   		 
    </div>
  
  	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="fatherName">Father Name:</label>
  		
    <input type="text" class="form-control display-7 display-7" name="fatherName" placeholder="Enter Father Name" required="required">
   		 
    </div>
  
  	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="motherName">Mother Name:</label>
  		
    <input type="text" class="form-control display-7" name="motherName" placeholder="Enter Mother Name" required="required">
   		
    </div>
  
  	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="birthDate">Birth Date:</label>
  		
    <input type="date" class="form-control display-7" name="birthDate" required="required">
   		 
    </div>
    
    <div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="gender">Gender:</label>
  		
    <input list="genderList" class="form-control display-7" name="gender" placeholder="Select Gender" required="required">
   	
         <datalist id="genderList">
         <option value="MALE">
         <option value="FEMALE">
         <option value="OTHER">       
         </datalist>
    </div>
  
  	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="dept">Class:</label>
  		
    <input list="deptList" class="form-control display-7" name="dept" placeholder="Select Class" required="required">
   		
         <datalist id="deptList">
         <option value="5 years">
         <option value="6 years">
          
         </datalist>
    </div>


  
  	<div class="col-md-12 col-md-4  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="permanentAddress">Address:</label>
  		
<textarea class="form-control display-7" name="permanentAddress" placeholder="Enter Permanent Address" required="required"> </textarea>

   		
    </div>
    
   	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="phone">Parent Phone:</label>
  		
    <input type="tel" class="form-control display-7" name="phone" placeholder="Enter Phone" required="required">
   		
    </div>
    
   	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="email">Parent Email:</label>
  		
    <input type="email" class="form-control display-7" name="email" placeholder="Enter Email Address" required="required">
   	
    </div><br><br>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button></div><br>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div><br><br>
  </div>
 

  <section class="engine"><a href="https://mobirise.info/a">online website builder</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
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
<?php } ?>