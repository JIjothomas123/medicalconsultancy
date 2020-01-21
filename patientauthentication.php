	<!------------------authenticating patient----------------------->

<?php
session_start();
include("connection.php");
//echo "invalid";

if(isset($_POST['submit']))
{
    $result=mysqli_query($conn,"SELECT * from patient WHERE username='".$_POST["username"]."' and password='".$_POST["password"]."'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
        
         $_SESSION["key"]=$row["id"];

        if(isset($_SESSION['key'])){
            header('location:patientshome.php');
        }
    }
    }
    else
    {
        echo "invalid";
    }
}
?>