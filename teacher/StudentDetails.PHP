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
  <meta name="description" content="">
  
  <title>StudentDetails</title>
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
<?php
    include('../php/connection.php');
    ?>
   <br><br><br><?php
	               $admin = $con->query("SELECT * FROM teacher WHERE id='".$_SESSION['unn']."'");
	               while($row2 = $admin->fetch_array()){
	                       ?>
    <nav  class="navbar navbar-default bootsnav">
 <div class="left"></div><div  class="col-md-2.5  form-group">
  		
    <input type="text" disabled="disabled" class="form-control display-10 display-10" name="studentId" placeholder="Welcome ,  <?php echo $row2['name'];?> ">
   		</nav>
    </div>
	<?php  }?>
  <div class="container">
        <center><h1 align="center">Student's Information </h1>
<hr size="100" width="40%" align="center" color="green"></center>
     
	<br><br><br><br><br>
	
  	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" name="form1" class="form-inline"  align="left"  role="form" >
    	      
       <font color="white">:;;;::;;;;;;;;;;;;;;;;;;;;;;;;;;;;:</font><h4 class="col-lg-offset-2">Student's ID </h4><font color="white">::::</font>
	   <input type="text" class="form-control display-7 display-7" name="searchStudentId" placeholder="Enter Student ID">
	   <input type="submit" name="submit" class="btn btn-primary btn-form display-4" value="  Search   "> 
        <input type="submit" name="showAll" class="btn btn-primary btn-form display-4" value="View All">
		<br><br>
    </form> 
      
	
    
    
    
    										<?php
										if (isset ($_POST['submit']))
											{
										extract($_POST);
									
										
										$sql="SELECT * FROM `student` WHERE `studentId` = $searchStudentId";
   										$result=mysqli_query($con, $sql);
										$data_row=mysqli_fetch_array($result);
										?>   
	<br><br>	
    <h3 class="col-lg-offset-2">Personal Details</h3> 
      <ul align="left "class="list-group col-sm-offset-2">
        <li class="list-group-item"><label class="control-label col-sm-4"><h5 >Student's ID</h5> </label><?php echo $data_row['studentId']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4"><h5 >First Name:</h5></label><?php echo $data_row['firstName']?></li>  
        <li class="list-group-item"><label class="control-label col-sm-4"><h5 >Last Name:</h5></label><?php echo $data_row['lastName']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4"><h5 >Father Name:</h5></label><?php echo $data_row['fatherName']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4"><h5 >Mother Name:</h5></label><?php echo $data_row['motherName']?></li>  
        <li class="list-group-item"><label class="control-label col-sm-4"><h5>Birthdate:</h5></label><?php echo $data_row['birthdate']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4"><h5>Gender:</h5></label><?php echo $data_row['gender']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4"><h5 >Class:</h5></label><?php echo $data_row['dept']?></li>
	<li class="list-group-item"><label class="control-label col-sm-4"><h5 >Permanent Address:</h5></label><?php echo $data_row['permanentAddress']?></li>  
        <li class="list-group-item"><label class="control-label col-sm-4"> <h5>Phone:</h5></label><?php echo $data_row['phone']?></li>
        <li class="list-group-item"><label class="control-label col-sm-4"><h5 >Email:</h5></label><?php echo $data_row['email']?></li>  
     </ul>	<br><br>
	 
	  <div ALIGN="center" class="form-inline"> 
         <form align="center" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="form1 "class="form" role="form">
               
            <input type="submit" name="edit" class="btn btn-primary btn-form display-4"  value="EDIT" />
            <input  class="invisible" name="stdID" value="<?php echo $data_row['studentId']?>" />

       
 	</form>     
	 
	 
    <form action="PHP/studentDelete.php" method="post" name="form1"class="form" role="form">
           
                 
            <input type="submit" name="edit" class="btn btn-primary btn-form display-4"  value="DELETE" />
            <input  class="invisible" name="studentId" value="<?php echo $data_row['studentId']?>" />
            
        
 	</form> </div > 
     
     
										 <?php }
										
                                         if (isset ($_POST['showAll']))
												{
											extract($_POST);
											$sqlAll="SELECT * FROM `student`";
											$resultAll=mysqli_query($con, $sqlAll);
                                         ?>
 
  <table align="right" class="table table-striped" ><br><br>
  <center><h2 class="col-sm-offset-2">All Registered Students</h2>

   <thead>
      <tr>
         <th class="text-left">ID</th>
         <th class="text-left">Name</th>
         <th class="text-left">class</th>
         <th class="text-left">Phone</th>
         <th class="text-left">Email</th>  
         <th class="text-left">BIRTHDATE</th>        
         <th class="text-left">GENDER</th>
         <th class="text-left">Parent</th>
         <th class="text-left">Permanent Address</th>         
      </tr>
   </thead>
          
   <tbody align="left"> 
   <?php
                while ($data_row1=mysqli_fetch_array($resultAll))
                {
					
                ?>
      <tr>
      	 <td class="text-left"><?php echo $data_row1['studentId']?></td>
         <td class="text-left"><?php echo $data_row1['firstName'].' '.$data_row1['lastName']?></td>         
         <td class="text-left"><?php echo $data_row1['dept']?></td>
         <td class="text-left"><?php echo $data_row1['phone']?></td>
         <td class="text-left"><?php echo $data_row1['email']?></td>
         <td class="text-left"><?php echo $data_row1['birthdate']?></td>
         <td class="text-left"><?php echo $data_row1['gender']?></td>
         <td class="text-left"><?php echo 'MR. '.$data_row1['fatherName'].' &'.' MRS: '.$data_row1['motherName']?></td>
         <td class="text-left"><?php echo $data_row1['permanentAddress']?></td>         
      </tr>
 <?php } ?>
   </tbody>
  
</table>
 
 <?php } ?>
 
						<?php
										if (isset ($_POST['edit']))
											{
										extract($_POST);
										$sqlEdit="SELECT * FROM `student` WHERE `studentId` = $stdID";
   										$resultEdit=mysqli_query($con, $sqlEdit);
										$data_row2=mysqli_fetch_array($resultEdit)
										
										?>
     <div  class="container"> <br><br>
  <center><h2 class="col-sm-offset-2">Edit Student's Detail</h2>                                     
   <form align="left" action="../PHP/updateStudentDetails.php"class="mbr-form form-with-styler" role="form" method="post">
  
    
  	<div class="form-group" >
  	<label class="control-label col-sm-2" for="studentId">Student ID:</label>
  		<div class="col-sm-10">
    <input name="studentId" type="text" class="form-control" value="<?php echo $data_row2['studentId']?>" readonly="readonly" >
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="firstName">First Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="firstName" value="<?php echo $data_row2['firstName']?>" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="lastName">Last Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="lastName" value="<?php echo $data_row2['lastName']?>" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="fatherName">Father Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="fatherName" value="<?php echo $data_row2['fatherName']?>" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="motherName">Mother Name:</label>
  		<div class="col-sm-10">
    <input type="text" class="form-control" name="motherName" value="<?php echo $data_row2['motherName']?>" required="required">
   		 </div>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="birthdate">Birth Date:</label>
  		<div class="col-sm-10">
    <input type="date" class="form-control" name="birthdate" value="<?php echo $data_row2['birthdate']?>" required="required">
   		 </div>
    </div>
    
    <div class="form-group">
  	<label class="control-label col-sm-2" for="gender">Gender:</label>
  		<div class="col-sm-10">
    <input list="genderList" class="form-control" name="gender" value="<?php echo $data_row2['gender']?>" required="required">
   		 </div>
         <datalist id="genderList">
         <option value="MALE">
         <option value="FEMALE">
         <option value="OTHER">       
         </datalist>
    </div>
  
  	<div class="form-group">
  	<label class="control-label col-sm-2" for="dept">Class :</label>
  		<div class="col-sm-10">
    <input list="deptList" class="form-control" name="dept" value="<?php echo $data_row2['dept']?>" required="required">
   		 </div>
              <datalist id="deptList">
              <option value="5 years">
              <option value="6 years">

         </datalist>
    </div>

  
  	<div class="form-group">
  	<label class="control-label col-sm-4" for="permanentAddress">Permanent Address:</label>
  		<div class="col-sm-10">
          <textarea name="permanentAddress" required="required" class="form-control"><?php echo $data_row2['permanentAddress']?></textarea>

   		 </div>
    </div>
    
   	<div class="form-group">
  	<label class="control-label col-sm-2" for="phone">Phone:</label>
  		<div class="col-sm-10">
    <input type="tel" class="form-control" name="phone" value="<?php echo $data_row2['phone']?>" required="required">
    
   		 </div>
    </div>
    
   	<div class="form-group">
  	<label class="control-label col-sm-2" for="email">Email:</label>
  		<div class="col-sm-10">
    <input type="email" class="form-control" name="email" value="<?php echo $data_row2['email']?>" required="required">
   		 </div>
    </div>
    

    <div align="left" class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary btn-form display-4" >UPDATE</button>
    </div>
    </div>

  </form></div> </div></div>
 <?php 
 		} 
 ?>
<br><br><br><br><br><br>
</div><br>

  <section class="engine"><a href="https://mobirise.info/h">how to create a web page</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
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