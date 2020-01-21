	<!------------------printing doctor details page----------------------->

<?php include('adminbase.php');
include('connection.php');?>
<h1>Appointments</h1>
<?php $result2=mysqli_query($conn,"SELECT * from doctor") ?>
<table class="">
<th class="frm">name </th>
<th class="frm">email </th>
<th class="frm">n_ID </th>
<th class="frm">qualification</th>
<th class="frm">pmdc</th>
<th class="frm">c_address</th>
<th class="frm">specialisation</th>
<th class="frm">c_timing</th>






<?php while($row2=mysqli_fetch_assoc($result2))
        {?>
       
                   <tr>
                   <td class="frm"><?php echo $row2["name"] ?></td>
                   <td class="frm"><?php echo $row2["email"] ?></td>
                    <td  class="frm"><?php echo $row2["n_id"] ?></td>
                    <td class="frm"><?php echo $row2["qualification"] ?></td>
                    <td class="frm"><?php echo $row2["pmdc"] ?></td>
                    <td class="frm"><?php echo $row2["c_address"] ?></td>
                    <td class="frm"><?php echo $row2["specialisation"] ?></td>
                    <td class="frm"><?php echo $row2["c_timing"] ?></td>



                 
                  

                     
                  </tr>
                    
                
                

                  <?php }
                  ?>		
            </table>
       

