<?php
    include_once'../parent/header.php';
?>





			
			  <center>
			  <div class="container">
                <?php
                       $admin = $con->query("SELECT * FROM parentdetail WHERE id='".$_SESSION['parentId']."'");
                       while($row2 = $admin->fetch_array()){
                ?>
                <h5>Hello
                    <?php echo $row2['firstname'];?> ,<br>
                  
                    you can edit and update your personal information here.</h5>
     

            </div>
			</center>
						
<div class="col-md-12 input-group-btn align-center"  >
<button  class="btn btn-primary btn-form display-4"  onclick="window.location.href = 'editprofile.php';">Parent Information</button>
<button  class="btn btn-primary btn-form display-4"  onclick="window.location.href = 'editStudentprofile.php';">Student Information</button>
</div>

<hr></hr>

  <center><h1>Parent's Information</h1></center>
    
	<div class="container">
          

            <form action="editprofile2.php" method="post">




                <!-- <br>
                 <h4 class ="h4-responsive font-weight-bold my-2 text-center black-text">Add Activity</h4>
                  <hr class="black">
                  <div class="row">
                     <div class="col-md-12">
                         <label>Upload photos of the activity:</label><br>
                         <input type="file" name="upload[]" class="btn btn-black" required="required" multiple>
                     </div>
                 </div> -->
                <br>
                <div class="row">
                <?php
                $display = $con->query("SELECT * FROM parentdetail WHERE id='".$_SESSION['parentId']."'");
                $row = $display->fetch_array();
				
                ?>

                   <div class="col-md-6 form-group">
                        <label>First Name:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['firstname'];?>" name="firstname"
                            placeholder="" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Last Name:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['lastname'];?>" name="lastname"
                            placeholder="" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Phone Number:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['phoneno'];?>" name="phoneno"
                            placeholder="" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Email:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['name'];?>" name="name"
                            placeholder="" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Street:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['street_name'];?>"
                            name="street_name" placeholder="" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>State:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['state'];?>" name="state"
                            placeholder="" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>City:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['city'];?>" name="city"
                            placeholder="" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Postcode:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['postcode'];?>" name="postcode"
                            placeholder="" required="required">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>IC Number:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['ic_number'];?>" name="ic_number"
                            placeholder="" required="required">
                    </div>
					<?php
                $display = $con->query("SELECT * FROM parent WHERE id='".$_SESSION['parentId']."'");
                $row = $display->fetch_array();
				
                ?>
                    <div class="col-md-6 form-group">
                        <label>Password:</label>
                        <input type="text" id="name" class="form-control" value="<?php echo $row['pass'];?>" name="pass"
                            placeholder="" required="required">
                    </div>
                    <!-- <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                      <label>Upload a photo here:</label>
                        <div class="input-group image-preview">
                            <input type="text" class="form-control image-preview-filename" disabled="disabled" value="Upload a photo here">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                    <span class="glyphicon glyphicon-remove"></span> Clear
                                </button>
                                <div class="btn btn-default image-preview-input">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    <span class="image-preview-input-title">Browse</span>
                                    <input type="file" accept="image/png, image/jpeg, image/gif" name="image-preview-input"/>
                                </div>
                            </span>
                        </div>
                    </div> -->
                </div>

               <div class="col-md-12 input-group-btn align-center"><button type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button></div>
            </form><br>



        <?php } ?>
    </div>
    </div>

<?php
 
?>

