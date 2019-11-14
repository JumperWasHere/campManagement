

<html>
    <head>
<style>
    /* .buttonsmall {
  display: inline-block;
  padding: 10px 15px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #fa4839;
  border: none;
  border-radius: 15px;
  /* box-shadow: 0 9px #999; }*/


/* .buttonsmall:hover {background-color: #ff0000} */

/* .buttonsmall:active {
  background-color: #ff0000;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
} */

    </style>


    </head>
    <body>
    <?php 
session_start();

include_once("../php/connection.php");
if(!isset($_SESSION['parentId']))
{
header("Location: ../index.html");
}
$camp_id=$_GET['camp_id'];
$query = "SELECT price FROM coursedetails where camp_id= $camp_id";
          $result = mysqli_query($con,$query);
          $row = mysqli_fetch_assoc($result);
        //   echo '<script> alert({$row['price'];}) </script>';
         $price=$row['price'];
        //   echo "<script>alert('An Error occur: {$price} ');</script>";
?>

    <h1>before payment</h1>


<div align="center" >
<p><input type="text" id="participantName" name="participantName" value="" placeholder="Name...."/></p>
<p><input type="text" id="identityNumber"name="identityNumber" value="" placeholder="IC/Passport...."/></p>
<p><input type="text" id="participantAge"name="participantAge" value="" placeholder="Age...."/></p>
<p><select class="select form-control" id="gender" name="gender" required="" placeholder="Gender">
                                   
								   <option value="Male">
								   Male
                                    </option>
                                    <option value="Female">
                                    Female
                                    </option>
									
                                   </select></p>
<p><input type="text" id="studentPhoneNumber"name="studentPhoneNumber" value="" placeholder="Student Phone Number...."/></p>
<p><input type="text" id="parentPhoneNumber"name="parentPhoneNumber" value="" placeholder="Parent Phone Number...."/></p>
<p><textarea  name="Address" id="Address" ></textarea></p> 

</div>

    <div align="center" >
        <!-- <P>Student:</P> -->
<!-- <button id="minus" class="buttonsmall">−</button>
<input type="text" value="0" id="input"  disabled/>
<button id="plus" class="buttonsmall">+</button><br><br><br><br> -->


<button onclick="confirm()"> Confirm</button> 
<script>



function confirm(){
    var name=document.getElementById('participantName').value;
    var ic=document.getElementById('identityNumber').value;
    var age=document.getElementById('participantAge').value;
    var gender=document.getElementById('gender').value;
    var parentPhone =document.getElementById('parentPhoneNumber').value;
    var studentPhone =document.getElementById('studentPhoneNumber').value;
    var address =document.getElementById('Address').value;
    localStorage.setItem("name", name);
    localStorage.setItem("ic", ic);
    localStorage.setItem("age", age);
    localStorage.setItem("gender", gender);
    localStorage.setItem("parentPhone", parentPhone);
    localStorage.setItem("studentPhone", studentPhone);
    localStorage.setItem("address", address);
    localStorage.setItem("price", "<?php echo $price; ?>");
    var camp_id= "<?php echo $_GET['camp_id']; ?>"
    alert("<?php echo $price; ?>");
location.replace("../parent/payment.php?camp_id="+camp_id);
}

</script>

</div>
    </body>
</html>