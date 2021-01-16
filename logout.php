<?php
session_start();
// session_unset();

unset($_SESSION['user']);
//  $_SESSION['user']="";
header('Location:login.php');
?>