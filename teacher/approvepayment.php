<?php 
session_start();
include('../php/connection.php');

function dnd($input) {
	
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
	die();
}

$status = [];



if(isset($_POST['donationApprove'])) {
	
	$donationId = $_POST['donationId'];
	$donationSql = "UPDATE `payments` SET `paymentApproved` = '1' WHERE `paymentId` = '".$donationId."'";
	$donationQuery = mysqli_query($con, $donationSql);
	
	$status[] = "Payment is approved";
}
?>

    <!DOCTYPE html>
    <html>

    <head>

        <link href="css/modern-business.css" rel="stylesheet">

        <!-- Site made with Mobirise Website Builder v4.10.7, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.10.7, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="assets/images/schoolicon.svg" type="image/x-icon">
        <meta name="description" content="">

        <title>Payment Approval</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <!--<link rel="stylesheet" href="assets/animatecss/animate.min.css">-->
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
		
		<div class="container pb-5" style="padding-top:50px">
			
			<?php
			
				if(!empty($success)) {
					
					?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php
						
							foreach($success as $key => $value) {
								
								?>
								<p>&bull; <?= $value ?>.</p>
								<?php
							}
						
						?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<?php
				}
			
			?>
			
			
			
			
			
			<div>
			
				<?php
				
					$paymentSql = "SELECT * FROM `payments` WHERE `paymentType` = 'donation' AND `paymentApproved` = '0' ORDER BY `paymentDate`";
					$paymentQuery = mysqli_query($con, $paymentSql);
				
				?>
			
				<h3 class="mb-3">Payment Of Camp Records</h3>
				
				<table class="table table-bordered">
					<thead>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Contact</th>
							<th>Email</th>
							<th>Value</th>
							<th>Date</th>
							<th>Slip</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					
						<?php
						
							if (mysqli_num_rows($paymentQuery) > 0) {
								
								$count = 1;
								while($row = mysqli_fetch_assoc($paymentQuery)) {
									
									?>
									<tr>
										<td><?= $count ?></td>
										<td><?= ucwords($row['firstName']) ?> <?= ucwords($row['lastName']) ?></td>
										<td><?= ucwords($row['contact']) ?></td>
										<td><?= ucwords($row['email']) ?></td>
										<td>RM <?= number_format($row['paymentValue'], 2) ?></td>
										<td><?= date('d F Y', strtotime($row['paymentDate'])) ?></td>
										<td><a href="../uploads/slips/<?= ucwords($row['paymentSlip']) ?>"><?= ucwords($row['paymentSlip']) ?></a></td>
										<td>
											<form method="post" action>
												<div class="d-flex">
													<input type="text" value="<?= $row['paymentId'] ?>" name="donationId" hidden>
													<button class="btn btn-success btn-sm" name="donationApprove">&#10003;</button>
													<!--<button class="btn btn-warning btn-sm" name="donationDecline">&#10005;</button>-->
												</div>
											</form>
										</td>
									</tr>
									<?php
									
									$count++;
								}
							}
							else {
								
								?>
								<tr>
									<td colspan="5">No Records</td>
								</tr>
								<?php
							}
						
						?>
					</tbody>
				</table>
			</div>
		</div>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor2/jquery/jquery.min.js"></script>
        <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

        <section class="engine"><a href="https://mobirise.info/u">bootstrap html templates</a></section>
        <script src="assets/web/assets/jquery/jquery.min.js"></script>
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
        <!--<input name="animation" type="hidden">-->
    </body>

    </html>