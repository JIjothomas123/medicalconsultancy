	<!------------------authenticating doctor authentication page----------------------->

<?php
include("connection.php");
//echo "invalid";

if(isset($_POST['submit']))
{
    $result=mysqli_query($conn,"SELECT * from doctor WHERE username='".$_POST["username"]."' and password='".$_POST["password"]."'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
        session_start();
        $_SESSION["id"]=$row["id"];
        header('location:doctorhome.php');
        }
    }
    else
    {
        echo "invalid";
    }
}
?>