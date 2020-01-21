	<!-----------------------------adding appointments details to database ---------------->
    <?php
require_once 'connection.php';
$id=$_POST['id'];
$name=$_POST['name'];
$specialisation=$_POST['specialisation'];
$date=$_POST['date'];
$fromtime=$_POST['fromtime'];
$totime=$_POST['totime'];

if(isset($_POST['submit']))
{
    $sq="INSERT into doctorappointment (doctor_id,name,specialisation,date,fromtime,totime) VALUES('".$id."','".$name."','".$specialisation."','".$date."','".$fromtime."','".$totime."')";
    if(!$result=$conn->query($sq))
    {
        die('Error['.$conn->error.']');
    }
    else
    {
        echo "successfull";
    }
}
mysqli_close($conn);
?>
