<?php 
include_once 'admin/tbl_product.php';
$product=new tbl_product();
$sum=0;

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">


<!--lightboxfiles-->

</head>
<body>
	<!---header--->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<?php include 'commonnav.php'; ?> 
			<!-- Brand and toggle get grouped for better mobile display -->
<!-- Form -->

<!-- Form -->




					<!-- .navbar-collapse --> 
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
        
    <!-- cart table -->
    <div class="container-fluid">
    <div id="msg "> </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
           
           <!-- Form -->
           <div class="container">
           <h2> Billing Information</h2>
           <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <?php  for ($i=0;$i<count($_SESSION['cartdata']);$i++) {
               $sum=$sum+$_SESSION['cartdata'][$i][2]; } ?>
               <input type="hidden" id="price" class="form-control"  value="<?php echo $sum;?>" >
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" class="form-control" name="firstname" >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" class="form-control" name="email" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" class="form-control" name="address" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" class="form-control" name="city">

            
              <div class="form-group">
                <label for="state">State</label>
                <input type="text" id="state" class="form-control" name="state" >
              </div>
              <div class="form-group">
                <label for="zip">Zip</label>
                <input type="text" id="zip" class="form-control" name="zip" >
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <input type="button"  name="COD" value="COD" class="btn btn-success " onclick="Coc  ()" >
            
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
     
    </div>
  </div>
</div>


    
</div>

<!-- cart table -->
			<!---footer--->
      <div >
			<?php include 'footer.php';?>
      </div>
			<!---footer--->
      

      <script src="https://www.paypal.com/sdk/js?client-id=ATQQwGvcJaEO-KijlB1GO12chmETAdD0bH6CsdUnssD-GBqj_IDbLD1-DKVPMp8T6r4NwulNHXEXHq_K"></script>
<script>
var price= document.getElementById("price").value;

 paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: price
          }
        }]
      });
    }, 
    onApprove: function (data, actions) {
      //  window.location.assign("ordersuccess.php");  
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        // console.log(details);
        $.ajax({
        url:"ordersuccess.php",
        type:"POST",

        
        data:{details:details},
       
        success:function(res){
          console.log(res);
		 
}
    })
      });
  },
  onCancel: function (data, actions) {
    // Show a cancel page or return to cart
    
    document.getElementById("msg").innerHTML="Payment not done!!!";
  },
  }).render('.col-25');</script>
			<script>
      function Coc(){
        window.location.assign("ordersuccess.php")
        var name= document.getElementById("fname").value;
        var email= document.getElementById("email").value;
        var Address= document.getElementById("adr").value;
        var City= document.getElementById("city").value;
        var State= document.getElementById("state").value;
        var zip= document.getElementById("zip").value;
        $.ajax({
        url:"ordersuccess.php",
        type:"POST",

        
        data:{name:name,email:email,Address:Address,City:City,State:State,zip:zip},
       
        success:function(res){ 
          
		 
}
    })
        
      }
      </script>
</body>
</html>