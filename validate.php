<?php
session_start();
$otp=$_POST['otp'];
//   $_SESSION['otp'];
if($otp==$_SESSION['otp'])
{
    echo "success";
}
else 
{
    echo "Failed";
}

?>