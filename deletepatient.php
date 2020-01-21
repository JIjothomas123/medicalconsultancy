	<!------------------deleting patient information page----------------------->

<?php 
session_start();

include("adminbase.php");
include("connection.php"); 

?>
<h1>Appointments</h1>
<?php $result2=mysqli_query($conn,"SELECT * from patient") ?>
<table class="">
<th style="width:80px" class="frm" >id </th>
<th style="width:80px" class="frm" >name</th>
<th style="width:80px" class="frm" >gender </th>
<th class="frm">email </th>
<th class="frm">n_ID </th>
<th class="frm">username</th>
<th class="frm">password</th>



<th class="frm"></th>






<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                   <tr>
                   <form action="deletepatientsubmit.php" method="POST">
                   <td class="frm"><input style="width:20px" class="" name="id" value="<?php echo $row2["id"] ?>" readonly></td>

                   <td class="frm"><input style="width:60px" class="" name="name" value="<?php echo $row2["name"] ?>" readonly></td>
                   <td class="frm"><input style="width:60px" class="" name="gender" value="<?php echo $row2["gender"] ?>" readonly></td>

                   <td class="frm"><input style="width:80px" class="" name="email" value="<?php echo $row2["email"] ?>" readonly></td>
                    <td  class="frm"><input style="width:60px" class="" name="n_id" value="<?php echo $row2["n_id"] ?>" readonly></td>
                    
                    <td class="frm"><input style="width:60px" class="" name="username" value="<?php echo $row2["username"] ?>" readonly></td>
                    <td class="frm"><input style="width:60px" class="" name="password" value="<?php echo $row2["password"] ?>" readonly></td>

                    <td class="frm"><input  type="submit"  class="btn-primary mt-md-3 px-5 rounded shadow" name="submit" value="delete"></td>

                    </form>

                  

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       