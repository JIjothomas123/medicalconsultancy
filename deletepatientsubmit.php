	<!------------------execute patient delete acxtion on database---------------------->

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
    $sq=mysqli_query($conn,"DELETE FROM patient WHERE id=$id");

    header('location:deletepatient.php');
 
}
mysqli_close($conn);
?>
