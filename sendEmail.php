<?php
use PHPmailer\PHPmailer\PHPMailer;
session_start();
if(isset($_POST['email'])){
     $_SESSION['email']=$_POST['email'];
     $_SESSION['otp']=rand(1000,9999);
    require_once ("PHPmailer/PHPMailer.php");
    require_once ("PHPmailer/SMTP.php");
    require_once ("PHPmailer/Exception.php");
    $mail= new PHPmailer();
    $mail-> isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username="bambambholle@gmail.com";
    $mail->Password='yash9597@';
    $mail->Port=465;
    $mail->SMTPSecure="ssl";

    $mail->isHTML(true);
    $mail->setFrom( $_SESSION['email']);
    $mail->addAddress($_SESSION['email']);
    $mail->Subject=("Verification OTP");
    $mail->Body= $_SESSION['otp'];
   
    if($mail->send()){
        $status="success";
        $response="Email is sent!!!";
        // 
        // echo $_SESSION['otp'];
    }
    else{
        $status="Failed";
        $response="Something is Wrong:<br>".$mail->ErrorInfo;
    }
     exit(json_encode(array("status"=> $status,"response"=>$response)));
    exit;
    
//     header("refresh:1; url=index.php?msg=".$msg);
 }


?>