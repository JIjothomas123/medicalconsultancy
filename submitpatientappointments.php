	<!-----------------------------adding appointments details to database ---------------->
    <?php
require_once 'connection.php';
$pname=$_POST['pname'];

$speciality=$_POST['speciality'];
$name=$_POST['name'];
$date=$_POST['date'];
$fromtime=$_POST['fromtime'];
$totime=$_POST['totime'];
$status=$_POST['status'];
if(isset($_POST['submit']))
{
    $sq="INSERT into patientappointment (pname,speciality,name,date,fromtime,totime,status) VALUES('".$pname."','".$speciality."','".$name."','".$date."','".$fromtime."','".$totime."','".$status."')";
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
