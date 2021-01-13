<?php
 session_start();
 require_once "tbl_user.php";
$user=new tbl_user();
if(isset($_POST['email']) && isset($_POST['password']))
{
    $email=$_POST['email'];
     $pass=$_POST['password'];
     $check=$user->logincheck($email,$pass);
   

    if($check==0){echo 3;}
    else {
        if($check[0]['is_admin']==0){
            if($check[0]['active']==0){echo 2;}
            else{
                echo 1;
                $_SESSION['user']=$check;
            }
        }
        else{echo 0; $_SESSION['user']=$check;}
        
    }
    
    }
