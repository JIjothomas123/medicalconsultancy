	<!-----------------------------adding doctor's details to database ---------------->
    <?php
require_once 'connection.php';
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
    $sq="INSERT into doctor (name,email,n_id,qualification,pmdc,c_address,specialisation,c_timing,username,password) VALUES('".$name."','".$email."','".$n_id."','".$qualification."','".$pmdc."','".$c_address."','".$specialisation."','".$c_timing."','".$username."','".$password."')";
    if(!$result=$conn->query($sq))
    {
        die('Error['.$conn->error.']');
    }
    else
    {
        header("location:adminhome.php");
    }
}
mysqli_close($con);
?>
