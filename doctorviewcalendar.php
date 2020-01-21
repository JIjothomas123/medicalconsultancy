		<!--insert appointments into database and view calendar-->

<?php session_start();
include("connection.php"); 
$var=$_SESSION["id"];
$result2=mysqli_query($conn,"SELECT * from doctor WHERE id=$var");?>

<?php include("doctorbase.php")?>
<?php while($row2=mysqli_fetch_assoc($result2))
{?>
<form role="form" class="frm" name="Myform"  action="insertdoctorappointments.php" method="post" onsubmit="return form()">
<div class="form-group">
    <label for="id">ID:</label>
    <input type="text" class="form-control"  name="id" id="id" required="required" value="<?php echo $var?>" readonly>
  </div>
  <div class="form-group">
    <label for="name">Doctor's name:</label>
    <input type="text" class="form-control"  name="name" id="id" required="required" value="<?php echo $row2["name"]?>" readonly>
  </div>
  <div class="form-group">
    <label for="specialisation">Specialisation:</label>
    <input type="text" class="form-control" id="specialisation" name="specialisation" value="<?php echo $row2["specialisation"]?>" required="required">
    </div>
<div class="form-group">
    <label for="date">Select available Dates:</label>
    <input type="date" class="" id="date" name="date" required="required">
  </div>
  Available  timing
  from:
  <input type="time" class=" frm inputcomponent mt-md-3 space" name='fromtime'  placeholder="">
  to:
  <input type="time" class=" frm inputcomponent mt-md-3 space" name="totime"  placeholder="">


  <button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
</form>
<?php
}?>
<!--view appointments from database-->
<h1>Available timings </h1>
<?php $result2=mysqli_query($conn,"SELECT * from doctorappointment where doctor_id=$var")?>
<table class="">
<th class="frm">DATE </th>
<th class="frm">FROM TIME</th>
<th class="frm">TO TIME</th>



<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                   <tr><td  class="frm"><?php echo $row2["date"] ?></td>
                    <td class="frm"><?php echo $row2["fromtime"] ?></td>
                    <td class="frm"><?php echo $row2["totime"] ?></td>
                 
                  

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       


