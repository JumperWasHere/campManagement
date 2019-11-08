<?php include_once'header.php';
?>


<div class="container">
        <div class="col-lg-8 col-lg-offset-2 centered">


          <div class="container">
        <center><h1 class="col-sm-offset-2">STUDENT REGISTRATION FORM</h1>
    </div>
<br><br>
 <div class="row">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="..\PHP\studentRegistration1.php" method="POST" class="mbr-form form-with-styler">
                
				<?php
                $display = $con->query("SELECT * FROM parentdetail WHERE id='".$_SESSION['parentId']."'");
                $row = $display->fetch_array();
				
                ?>
				
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
  		
    <input type="text" class="form-control display-7 display-7"  name="firstName" placeholder="Enter First Name" required="required">
   		
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
  	<label class="form-control-label mbr-fonts-style display-7" for="birthdate">Birth Date:</label>
  		
    <input type="date" class="form-control display-7" name="birthdate" required="required">
   		 
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
  		
<input type="text" class="form-control display-7" value=" <?php echo $row['street_name'];?>  <?php echo $row['postcode'];?>  <?php echo $row['city'];?>  <?php echo $row['state'];?>" 
name="permanentAddress" placeholder="Enter Permanent Address" required="required"> 


   		
    </div>
    
   	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="phone">Parent Phone:</label>
  		
    <input type="tel" class="form-control display-7" value="<?php echo $row['phoneno'];?>" name="phone" placeholder="Enter Phone" required="required">
   		
    </div>
    
   	<div class="col-md-6  form-group">
  	<label class="form-control-label mbr-fonts-style display-7" for="email">Parent Email:</label>
  		
    <input type="email" class="form-control display-7" value="<?php echo $row['name'];?>" name="email" placeholder="Enter Email Address" required="required">
   	
    </div>
                        <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button></div>
                    </div><br>

                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
  </div>
  </div>
<br><br>



<?php  ?>