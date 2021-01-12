<?php 
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
	 $email=$_POST['email'];
     $pass=$_POST['password'];
     require_once 'db.php';
     $sql="select * from tbl_user WHERE  email='".$email."'AND password='".$pass."' limit 1";
     $result=mysqli_query($conn,$sql);
     $data = mysqli_fetch_row($result); 
     if(mysqli_num_rows($result)==1){
        // echo "<pre>";
        //    print_r($data);
        //    echo "</pre>";
           if($data[7]=="0"){
            if($data[6]=="1"){
                echo "1";
                $_SESSION['id']=$data[0];
                $_SESSION['email']=$data[1];
        $_SESSION['name']=$data[2];
        $_SESSION['mobile']=$data[3];
        $_SESSION['pass']=$data[9];
            }
            else{
                echo "2";
            }
           }
           else{
            echo "0";
            $_SESSION['id']=$data[0];
            $_SESSION['email']=$data[1];
    $_SESSION['name']=$data[2];
    $_SESSION['mobile']=$data[3];
    $_SESSION['pass']=$data[9];
           }
     }else{
         echo "3";
     }

     }
 ?>