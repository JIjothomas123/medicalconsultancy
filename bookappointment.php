	<!------------------patient's appointment booking----------------------->

<?php
session_start();
include("patientbase.php");
include("connection.php");
 $var=$_SESSION["key"];
 $sq="SELECT * from patient WHERE id='".$var."'";
$result=mysqli_query($conn,$sq);
?>

<?php while($row=mysqli_fetch_assoc($result))
{?>

<form role="form" class="" name="Myform"  action="submitpatientappointments.php" method="post" onsubmit="return form()">
<div class="form-group">
    <label for="s">Patient's name:</label>
    <input type="text" class="form-control"  name="pname" id="s" required="required" >
  </div>
<div class="form-group">
    <label for="s">Speciality:</label>
    <input type="text" class="form-control"  name="speciality" id="s" required="required" >
  </div>
  <div class="form-group">
    <label for="n">Doctor's name:</label>
    <input type="text" class="form-control"  name="name" id="n" required="required">
  </div>
  
<div class="form-group">
    <label for="d">Select Dates:</label>
    <input type="date" class="frm" id="d" name="date" required="required">
  </div>
  
  Available  timing
  from:
  <input type="time" class=" frm inputcomponent mt-md-3 space" name='fromtime'  placeholder="">
  to:
  <input type="time" class=" frm inputcomponent mt-md-3 space" name="totime"  placeholder="">
  <div class="form-group">
    <label for="status">status:</label>
    <input type="text" class="frm" id="date" name="status" required="required" value="pending" readonly>
  </div>

  <button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
</form>
<h1>Appointment STATUS</h1>
<?php $result2=mysqli_query($conn,"SELECT * from patientappointment where pname='".$row["name"]."'") ;?>
<?php
}?>

<table class="">
<th class="frm">NAME </th>
<th class="frm">SPECIALISATION </th>
<th class="frm">DATE </th>
<th class="frm">FROM TIME</th>
<th class="frm">TO TIME</th>
<th class="frm">STATUS</th>



<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                   <tr>
                   <td class="frm"><?php echo $row2["name"] ?></td>
                   <td class="frm"><?php echo $row2["speciality"] ?></td>
                    <td  class="frm"><?php echo $row2["date"] ?></td>
                    <td class="frm"><?php echo $row2["fromtime"] ?></td>
                    <td class="frm"><?php echo $row2["totime"] ?></td>
                    <td class="frm"><?php echo $row2["status"] ?></td>

                 
                  

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>

