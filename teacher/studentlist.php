<?php
    include_once'header.php';
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="overview-wrap">
                      <h2 class="title-1">Registered Members List</h2>

                  </div>
              </div>
          </div>
          <div class="row m-t-30">
              <div class="col-md-12">
                  <!-- DATA TABLE-->
                  <div class="table-responsive m-b-40">
                      <table class="table table-borderless table-data3">
                          <thead>
                              <tr>

                                  <th>Student ID</th>
                                  <th>First Name</th>
                                  <th>Student's Name</th>
                                  <th>Father Name</th>
                                  <th>Mother Name</th>
								   <th>Birthdate</th>
                                  <th>Gender</th>
                                  <th>Class</th>
								  <th>Permanent Address</th>
                                  <th>Phone</th>
                                  <th>Email</th>
                              </tr>

                          </thead>
                          <tbody>
                              <tr>
                                <?php
           $sql="SELECT * FROM `student` ";
   										$result=mysqli_query($con, $sql);
               while($data_row=mysqli_fetch_array($result)){
                       ?>
                                  <td><?php echo $row2['studentId'];?></td>
                                  <td><?php echo $row2['firstName'];?> <?php echo $row2['lastName'];?></td>
                                  <td><?php echo $row2['fatherName'];?></td>
                                  <td><?php echo $row2['motherName'];?></td>
								  <td><?php echo $row2['birthdate'];?></td>
                                  <td><?php echo $row2['firstname'];?></td>
                                  <td><?php echo $row2['gender'];?></td>
                                  <td><?php echo $row2['dept'];?></td>
								  <td><?php echo $row2['permanentAddress'];?></td>
                                  <td><?php echo $row2['phone'];?> <?php echo $row2['lastname'];?></td>

                                  <td><a class="btn btn-outline-primary btn-sm" href="memberlistdetails.php?studentId=<?php echo $row2['studentId'];?>">View</a></td>
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
                  <!-- END DATA TABLE-->
              </div>
          </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>

</div>

<?php

?>
