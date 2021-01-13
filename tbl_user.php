<?php 
require_once "admin/Dbcon.php";
class tbl_user extends Dbcon{
    public $conn;
    public function __construct()
    {
        $dbcon=new Dbcon();
        $this->conn=$dbcon->createConnection();
    }
    public function logincheck($email,$pass)
    {
        $sql="select * from tbl_user WHERE  email='".$email."'AND password='".$pass."' limit 1";
        $result=$this->conn->query($sql);
        // $data = mysqli_fetch_row($result); 
        if ($result->num_rows>0) {
            $arr=array();
            while ($row=$result->fetch_assoc()) {
                $arr[]=$row;
            }
            return $arr;
        }
        return 0;



        
    }

    public function createaccount($name,$email,$pass,$status,$is,$mobile,$ques,$ans,$approvemail,$approvemob){
        $sql="INSERT INTO tbl_user (email,name,mobile,email_approved,phone_approved,active,is_admin,password,security_question,security_answer) 
    VALUES('$email','$name','$mobile',' $approvemail','$approvemob','$status','$is','$pass','$ques','$ans')";
     $result=$this->conn->query($sql);
     if($result){
        return "success"; 
    }else{
       return "failed";
    }
    }

}