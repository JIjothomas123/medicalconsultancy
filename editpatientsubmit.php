	<!------------------submitting edited details of patient----------------------->

<?php
require_once 'connection.php';
$id=$_POST['id'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$n_id=$_POST['n_id'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
    $sq=mysqli_query($conn,"update patient set name='".$name."',gender='".$gender."',email='".$email."',n_id='".$n_id."',username='".$username."',password='".$password."' WHERE id='".$id."'");

    header('location:editpatient.php');
 
}
mysqli_close($conn);
?>
