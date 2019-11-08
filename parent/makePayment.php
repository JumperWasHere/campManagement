<?php
	
	include_once('../php/donationValidation.php');
	
	
	$registered = false;
	$monthly = false;
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
			<link rel="shortcut icon" href="assetss/images/schoolicon.svg" type="image/x-icon">
			<meta name="description" content="">

			<title>Payment</title>
			<link rel="stylesheet" href="assetss/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
			<link rel="stylesheet" href="assetss/web/assets/mobirise-icons/mobirise-icons.css">
			<link rel="stylesheet" href="assetss/tether/tether.min.css">
			<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap-grid.min.css">
			<link rel="stylesheet" href="assetss/bootstrap/css/bootstrap-reboot.min.css">
			<!--<link rel="stylesheet" href="assets/animatecss/animate.min.css">-->
			<link rel="stylesheet" href="assetss/dropdown/css/style.css">
			<link rel="stylesheet" href="assetss/theme/css/style.css">
			<link rel="stylesheet" href="assetss/mobirise/css/mbr-additional.css" type="text/css">

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


		
		<?php
	               $admin = $con->query("SELECT * FROM parentdetail WHERE id='".$_SESSION['parentId']."'");
	               while($row2 = $admin->fetch_array()){
	                       ?>
      <nav  class="navbar navbar-default bootsnav" style="padding-top:20px">
 <div class="left"></div><div  class="col-md-2.5  form-group">
  		
    <input type="text" disabled="disabled" class="form-control display-10 display-10" name="studentId" placeholder="Welcome , <?php echo $row2['firstname'];?> <?php echo $row2['lastname'];?> ">
   		</nav>
    </div>
		
		<!-- Content -->
		<div class="container pb-5" style="padding-top:50px">
		
			<h3>Make payment</h3>
			
			<hr>
			
			
			<?php
			
				if(!empty($success)) {
					
					?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
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
				
				
				if(!empty($errors))  {
					
					?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<?php
							foreach($errors as $key => $value) {
								
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
			
			
			<form method="post" action="" enctype="multipart/form-data">
				<div class="row">
				
					<div class="col-md-12 col-lg-8">
						
						<?php
						
						
							$currentMonth = (isset($_GET['m'])) ? $_GET['m']: date('m');
							$currentYear = (isset($_GET['y'])) ? $_GET['y']: date('Y');
							
							$paymentTypeArray = [];
							$checkRegisterSql = "SELECT * FROM `payments` WHERE `parentsId` = '".$_SESSION['parentId']."' AND `paymentType` = 'registration'";
							$checkRegisterQuery = mysqli_query($con, $checkRegisterSql);
							if(mysqli_num_rows($checkRegisterQuery) > 0) {
								
								$registered = true;
							}
							
							
							$checkCurrentMonthFreeSql = "SELECT * FROM `payments` WHERE `parentsId` = '".$_SESSION['parentId']."' AND `paymentType` = 'monthly' AND `paymentDate` >= '".date('Y-m-d', strtotime($currentYear.'-'.$currentMonth.'-01'))."' AND `paymentDate` <= '".date('Y-m-t', strtotime($currentYear.'-'.$currentMonth.'-01'))."'";
							$checkCurrentMonthFreeQuery = mysqli_query($con, $checkCurrentMonthFreeSql);
							if(mysqli_num_rows($checkCurrentMonthFreeQuery) > 0) {
								
								$monthly = true;
							}
							
						
							
							$paymentTypeArray[] = 'donation';
							
							$paymentType = (isset($_GET['pt'])) ? $_GET['pt']: reset($paymentTypeArray);
							
						?>
						
						<label for="paymentType">Payment Type</label>
						<div class="d-flex flex-column flex-md-row" id="paymentType">
							<?php
								
								foreach($paymentTypeArray as $key => $value) {
									
									if($paymentType == $value) {
										
										?>
										<button type="button" class="btn btn-dark mx-1" onclick="window.location.href='makepayment.php?pt=<?=$value?>'"><?=ucwords($value)?></button>
										<?php
									}
									else {
										
										
									}
								}
								
							?>
						</div>
					
					</div>
				
				</div>
				
				<hr>
				<input type="text" name="paymentType" value="<?= $paymentType ?>" hidden>
				<input type="text" name="paymentMonth" value="<?= $currentMonth ?>" hidden>
				<input type="text" name="paymentYear" value="<?= $currentYear ?>" hidden>
				
				<?php
				
					if($paymentType == 'monthly') {
						
						?>
						
						<div class="row">
				
							<div class="col-md-12 col-lg-3">
							
								<div class="form-group">
									<label for="paymentMonth">Month</label>
									<select class="form-control border-secondary" id="paymentMonth" name="paymentMonth">
										<?php
											
											$monthArray = [
												'12' => 'December',
												'11' => 'November',
												'10' => 'October',
												'09' => 'September',
												'08' => 'August',
												'07' => 'July',
												'06' => 'June',
												'05' => 'May',
												'04' => 'April',
												'03' => 'March',
												'02' => 'February',
												'01' => 'January'
											];
											
											foreach($monthArray as $monthInt => $monthString) {
												
												if($currentMonth == $monthInt) {
													
													?>
													<option value="<?= $monthInt ?>" selected onclick="window.location.href='makepayment.php?pt=<?=$paymentType?>&m=<?=$monthInt?>&y=<?=$currentYear?>'"><?=$monthString?></option>
													<?php
												}
												else {
													
													?>
													<option value="<?= $monthInt ?>" onclick="window.location.href='makepayment.php?pt=<?=$paymentType?>&m=<?=$monthInt?>&y=<?=$currentYear?>'"><?= $monthString ?></option>
													<?php
												}
												
											}
										
										?>
									</select>
								</div>
							
							</div>
							
							<div class="col-md-12 col-lg-3">
							
								<div class="form-group">
									<label for="paymentYear">Year</label>
									<select class="form-control border-secondary" id="paymentYear" name="paymentYear">
									
										<?php
										
											for($x=date('Y'); $x>=2015; $x=$x-1) {
												
												if($currentYear == $x) {
													
													?>
													<option value="<?= $x ?>" onclick="window.location.href='makepayment.php?pt=<?=$paymentType?>&m=<?=$currentMonth?>&y=<?=$x?>'" selected><?= $x ?></option>
													<?php
												}
												else {
													
													?>
													<option value="<?= $x ?>" onclick="window.location.href='makepayment.php?pt=<?=$paymentType?>&m=<?=$currentMonth?>&y=<?=$x?>'"><?= $x ?></option>
													<?php
												}
											}
										
										?>
									</select>
								</div>
							
							</div>
						
						</div>
						
						<?php
					}
					
					
					
					
					
					if($monthly == true AND $paymentType == 'monthly') {
						
						?>
						
						<div class="alert alert-warning" role="alert">
							You already made payment for this month
						</div>
						
						<?php
					}
					else {
						
						?>
						
						<div class="row">
				
							<div class="col-md-12 col-lg-6">
							
								<div class="form-group">
									<label for="paymentFirstName">First Name</label>
									<input type="text" class="form-control border-secondary" id="paymentFirstName" name="paymentFirstName" placeholder="First Name" required>
								</div>
							
							</div>
							
							<div class="col-md-12 col-lg-6">
							
								<div class="form-group">
									<label for="paymentLastName">Last Name</label>
									<input type="text" class="form-control border-secondary" id="paymentLastName" name="paymentLastName" placeholder="Last Name" required>
								</div>
							
							</div>
						
						</div>
						
						<div class="row">
						
							<div class="col-md-12 col-lg-6">
							
								<div class="form-group">
									<label for="paymentContactNumber">Contact Number</label>
									<input type="text" class="form-control border-secondary" id="paymentContactNumber" name="paymentContactNumber" placeholder="Contact Number" required>
								</div>
							
							</div>
							
							<div class="col-md-12 col-lg-6">
							
								<div class="form-group">
									<label for="paymentEmail">Email Address</label>
									<input type="email" class="form-control border-secondary" id="paymentEmail" name="paymentEmail" placeholder="Email Address" required>
								</div>
							
							</div>
						
						</div>
						
						<div class="row">
						
							<div class="col-md-12 col-lg-6">
							
								<div class="form-group">
									<label for="paymentTransactionSlip">Transaction Slip</label>
									<p style="font-size:14px; font-style:italic">* We will verify payment with the slip and email transaction receipt once verified.</p>
									<p style="font-size:14px; font-style:italic">* Please upload your payment slip altogether.</p>
									<input type="file" class="form-control-file border-secondary" id="paymentTransactionSlip" name="paymentTransactionSlip" required>
								</div>
							
							</div>
						
						</div>
						
						<?php
							
							if($paymentType == 'donation') {
								
								?>
								<hr>
						
								<div class="row">
								
									<div class="col-12">
									
										<div class="form-group">
										
											<label for="paymentQuickAmount">Quick Amount</label>
											<div class="d-flex flex-column flex-lg-row flex-wrap" id="paymentQuickAmount">
												
												<?php
												
													$quickAmountArray = [
														'50',
														'100',
														'150',
														'200',
														'250'
													];
													
													foreach($quickAmountArray as $key => $value) {
														
														?><button type="button" class="btn btn-primary mx-1" onclick="quickValueFill(this.textContent);">RM <?=$value?></button><?php
													}
												
												?>
											
											</div>
											
										</div>
									
									</div>
								
								</div>
								<?php
							}
						?>
						
						<hr>
						
						<h4 class="mb-3">Payment will be made to this account.</h4>
						<div class="row mb-3">
							
							<div class="col-md-12 col-lg-6">
								
								<h5>Bank Name</h5>
								<p style="color:#16a085">Bank Islam Malaysia Berhad</p>
							
							</div>
						
						</div>
						
						<div class="row mb-3">
							
							<div class="col-md-12 col-lg-6">
								
								<h5>Account Name</h5>
								<p style="color:#16a085">Tadika Muhammadi</p>
							
							</div>
						
						</div>
						
						<div class="row mb-3">
							
							<div class="col-md-12 col-lg-6">
								
								<h5>No Account</h5>
								<p style="color:#16a085">1234-5415-5845698</p>
							
							</div>
						
						</div>
						
						<div class="row mb-3">
						
							<div class="col-md-12 col-lg-6">
								
								<?php
								
									if($paymentType == 'monthly') {
										
										$paymentValue = '50';
										$paymentButtonValue = "Pay";
									}
									else if($paymentType == 'registration') {
										
										$paymentValue = '100';
										$paymentButtonValue = "Pay";
									}
									else {
										
										$paymentValue = '';
										$paymentButtonValue = "Donate";
									}
								
								?>
								
								<div class="form-group">
									<label for="paymentValue">Payment Value</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">RM </div>
										</div>
										<input type="number" class="form-control border-secondary" id="paymentValue" name="paymentValue" placeholder="Value" value="<?=$paymentValue?>" required>
									</div>
								</div>
							
							</div>
						
						</div>
						
						<div class="row">
						
							<div class="col-md-12 col-lg-6">
							
								<button type="submit" class="btn btn-block mx-0" style="background-color:#27ae60" name="paymentSubmit"><?=$paymentButtonValue?></button>
							
							</div>
						
						</div>
						
						<?php
					}
				
				?>
				
			</form>
		
		</div>




        <!-- Bootstrap core JavaScript -->
        <script src="vendor2/jquery/jquery.min.js"></script>
        <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

        <section class="engine"><a href="https://mobirise.info/u">bootstrap html templates</a></section>
        <script src="assetss/web/assetss/jquery/jquery.min.js"></script>
        <script src="assetss/tether/tether.min.js"></script>
        <script src="assetss/popper/popper.min.js"></script>
        <script src="assetss/bootstrap/js/bootstrap.min.js"></script>
        <script src="assetss/smoothscroll/smooth-scroll.js"></script>
        <script src="assetss/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assetss/viewportchecker/jquery.viewportchecker.js"></script>
        <script src="assetss/dropdown/js/nav-dropdown.js"></script>
        <script src="assetss/dropdown/js/navbar-dropdown.js"></script>
        <script src="assetss/theme/js/script.js"></script>

        <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
        <!--<input name="animation" type="hidden">-->
		
		<script>
			function quickValueFill(value) {
				var valueOnly = value.replace('RM ', '');
				$("#paymentValue").val(valueOnly);
			}
		</script>
    </body>

    </html>	<?php
					}
				
				?>