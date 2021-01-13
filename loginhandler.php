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

    if(isset($_POST['email'])&& isset($_POST['mobileno'])){
        $name=$_POST['name'];
     $email=$_POST['email'];
    
    $status=1;
    $is=0;
     $mobile=$_POST['mobileno'];
     $pass=$_POST['password'];
     $ques=$_POST['question'];
     $ans=$_POST['answer'];
     $approvemail=1;
     $approvemob=1;
     $che=$user->createaccount( $name,$email,$pass,$status,$is,$mobile,$ques,$ans,$approvemail,$approvemob);
     echo $che;
    }
