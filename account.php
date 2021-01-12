
<!DOCTYPE HTML>
<html>
<head>
<title>Ced hosting  a complete solution for all your hosting services..</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
	<!---header--->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<?php include 'commonnav.php'; ?> 
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->
		<!---login--->
			<div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
    <div class=" alert alert-success" id="msg"></div>
			<div class="register">
		  	  <form> 
				<form  >
   <div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr" name="name" placeholder="Enter name...">
</div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <input type="button" onclick="sendEmail()" value="SendOTP" class="btn btn-primary" id="sendem" >
    <div id="validate" style="display:none;"><input type=number name="otp" id="otp"><input type="button" value="Validate" onclick="validate()" class="btn btn-dark" ></div> 
    <small id="sent"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="number" class="form-control" id="mobno" aria-describedby="emailHelp" placeholder="Enter mobile number">
    <small>  <input type="button" value="Send OTP" name="send"  onclick="sendotp()" class="btn btn-primary" id="senop">

    <div id="verify" style="display:none;"> <input type=number name="otp" id="otp1"><input type="button" value="Verify" onclick="verify()" class="btn btn-dark" > </div>
    <small id="notify"></small>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password">
  </div>
  <div class="form-group">
	  <label>Security question :</label>
	  <select class="form-control" id="question">
		  <option>What is your first school name?</option>
		  <option>What is your first mobile number?</option>
		  <option>What is your mother's maiden name?</option>
		  <option>What is your favourite novel?</option>
				</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="answer">
				</div>
  <small>Already Registered<a href="login.php" class="">LOGIN</a></small>
 <input type="button" class="btn btn-success" value="SIGNUP" onclick="user()">
  
</form>
				</form>
				
				</div>
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login -->
				<!---footer--->
				<?php include 'footer.php';?>
			<!---footer--->
			<script>
     var mobflag=0;
     var emaflag=0;
  function sendEmail(){
    var email=$("#email").val();
   
    if(email!=""){
      $.ajax({
        url:"sendEmail.php",
        type:"POST",

        
        data:{email:email},
       
        success:function(res){
            
           $('#sent').text("OTP sent successfully.");
          console.log("Message sent successfully." );
          $("#validate").css("display", "block");
         
          
          otp=res;
          
        }
    })
  }
  }
  function validate()
  { 
    var otp=$("#otp").val();
    if(otp!=""){
      $.ajax({
        url:"validate.php",
        type:"POST",

        
        data:{otp:otp},
       
        success:function(res){
            // $('#myForm')[0].reset();
            if(res=="success"){
            $('#sent').text("OTP verified.");
            $("#validate").css("display", "none");
            $("#sendem").prop('disabled', true);
            $("#email").prop('readonly', true);
            emaflag=1;
            }else{
              $('#sent').text("OTP not verified.");
            }
            console.log(res);
        }
    })
  } 
  }
  function sendotp(){
    var mobile=$("#mobno").val();
   var otp;
    if(mobile!=""){
      $.ajax({
        url:"sendotp.php",
        type:"POST",

        
        data:{mobno:mobile},
       
        success:function(res){
           
           $('#notify').text("OTP sent successfully.");
          console.log("Message sent successfully." );
          $("#verify").css("display", "block");
         
          
        }
    })
  }
  }
  function verify()
  { 
    var otp=$("#otp1").val();
    if(otp!=""){
      $.ajax({
        url:"validate.php",
        type:"POST",

        
        data:{otp:otp},
       
        success:function(res){
            
            if(res=="success"){
              mobflag=1;
            $('#notify').text("OTP verified.");
            $("#verify").css("display", "none");
            $("#senop").prop('disabled', true);
            $("#mobno").prop('readonly', true);
            }else{
              $('#verify').text("OTP not verified.");
            }
            console.log(res);
        }
    })
  } 
  }
  function user(){
    var name=$("#usr").val();
    var email=$("#email").val();
    var mobile=$("#mobno").val();
	var pass=$("#Password").val();
	var ques=$("#question").val();
	var ans=$("#answer").val();


    if(name!=""&& email!=""&&mobile!=""&&pass!=""&&ques!=""&&ans!="")
    {
    if(mobflag==1&&emaflag==1){
      //  console.log(name);
      //  console.log(email);
      //  console.log(mobile);
      //  console.log(pass);
      $.ajax({
        url:"user.php",
        type:"POST",

        
        data:{name:name,mobileno:mobile,email:email,password:pass,question:ques,answer:ans},
       
        success:function(res){
          if(res=='success'){
            $('#msg').text("Sign up successfull login to procced to cart!!.");

          }
          else{
            $('#msg').text("Sign up unsuccessfull email or password may already exist!!.");
          }
        }
         
	})
	




     }
     else{
      $('#msg').text("Verify Your email as well as mobile number!!.");
     }
    }
    else{
      $('#msg').text("Complete the Signup process!!.");
    }
  }
  </script>
</body>
</html>