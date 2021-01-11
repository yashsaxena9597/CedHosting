<?php
if(isset($_POST['email'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
    
    $status=0;
    $is=0;
     $mobile=$_POST['mobileno'];
     $pass=$_POST['password'];
     $ques=$_POST['question'];
     $ans=$_POST['answer'];
     echo $ques;
     echo $ans;
      echo $pass;
       echo $mobile;
    // require_once 'db.php';

    // $stu_query = "INSERT INTO 'tbl_user' (email_id , name , dateofsignup, mobile , status , password , is_admin)
    //  VALUES('".$email."','".$name."','".$date."','".$mobile."','".$status."','".$pass."','".$is."',) ";



    // $stu_query="INSERT INTO tbl_user (email_id,name,dateofsignup,mobile,status,password,is_admin) 
    // VALUES('$email','$name',NOW(),'$mobile','$status','$pass','$is')";

// $stu_query="INSERT INTO tbl_user ( email_id, name, dateofsignup, mobile, status, password, is_admin) VALUES ('bambambholle@gmail.com', 'yash', '3213', '3213321321', '0', '1234', '0')
// ";

    //  $result= mysqli_query($conn,$stu_query);
    //  if($result){
    //      echo "success"; die;
    //  }else{
    //     echo "failed";
    //  }
}
 ?>