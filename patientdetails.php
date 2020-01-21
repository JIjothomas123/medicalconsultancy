	<!------------------patient's details page----------------------->

<?php include('adminbase.php');
include('connection.php');?>
<h1>Appointments</h1>
<?php $result2=mysqli_query($conn,"SELECT * from patient") ?>
<table class="">
<th class="frm">name </th>
<th class="frm">gender </th>
<th class="frm">email</th>
<th class="frm">n_id</th>







<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                   <tr>
                   <td class="frm"><?php echo $row2["name"] ?></td>
                   <td class="frm"><?php echo $row2["gender"] ?></td>
                    <td  class="frm"><?php echo $row2["email"] ?></td>
                    <td class="frm"><?php echo $row2["n_id"] ?></td>
                  



                 
                  

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       

