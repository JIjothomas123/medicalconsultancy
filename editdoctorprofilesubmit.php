	<!------------------doctor profile edit submit---------------------->

<?php
require_once 'connection.php';
$id=$_POST['id'];

$name=$_POST['name'];
$email=$_POST['email'];
$n_id=$_POST['n_id'];
$qualification=$_POST['qualification'];
$pmdc=$_POST['pmdc'];
$c_address=$_POST['c_address'];
$specialisation=$_POST['specialisation'];
$c_timing=$_POST['c_timing'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
    $sq=mysqli_query($conn,"update doctor set name='".$name."',email='".$email."',n_id='".$n_id."',qualification='".$qualification."',pmdc='".$pmdc."',c_address='".$c_address."',specialisation='".$specialisation."',c_timing='".$c_timing."',username='".$username."',password='".$password."' WHERE id='".$id."'");

    header('location:editdoctorprofile.php');
 
}
mysqli_close($conn);
?>
