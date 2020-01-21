	<!-----------------------------adding doctor's details to database ---------------->
    <?php
require_once 'connection.php';
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$n_id=$_POST['n_id'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
    $sq="INSERT into patient (name,gender,email,n_id,username,password) VALUES('".$name."','".$gender."','".$email."','".$n_id."','".$username."','".$password."')";
    if(!$result=$conn->query($sq))
    {
        die('Error['.$conn->error.']');
    }
    else
    {
        echo "signup successfull";
        header("location:patientlogin.php");
    }
}
mysqli_close($con);
?>
