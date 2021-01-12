<?php
if(isset($_POST['email'])){
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
    //  echo $ques;
    //  echo $ans;
    //   echo $pass;
    //    echo $mobile;
    require_once 'db.php';

    // $stu_query = "INSERT INTO 'tbl_user' (email_id , name , dateofsignup, mobile , status , password , is_admin)
    //  VALUES('".$email."','".$name."','".$date."','".$mobile."','".$status."','".$pass."','".$is."',) ";



    $stu_query="INSERT INTO tbl_user (email,name,mobile,email_approved,phone_approved,active,is_admin,password,security_question,security_answer) 
    VALUES('$email','$name','$mobile',' $approvemail','$approvemob','$status','$is','$pass','$ques','$ans')";

// $stu_query="INSERT INTO tbl_user ( email_id, name, dateofsignup, mobile, status, password, is_admin) VALUES ('bambambholle@gmail.com', 'yash', '3213', '3213321321', '0', '1234', '0')
// ";

     $result= mysqli_query($conn,$stu_query);
     if($result){
         echo "success"; die;
     }else{
        echo "failed";
     }
}
 ?>