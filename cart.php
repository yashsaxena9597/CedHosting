<?php 
include_once 'admin/tbl_product.php';
$product=new tbl_product();

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
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

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
						<?php include 'commonnav.php'; ?> 
			<!-- Brand and toggle get grouped for better mobile display -->
					<!-- .navbar-collapse --> 
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
        <!-- <?php  echo "<pre>"; print_r ($_SESSION['cartdata']);echo "</pre>"; ?> -->
    <!-- cart table -->
    <div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Monthly Price</th>
                        <th>Annual Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody><?php
                for ($i=0;$i<count($_SESSION['cartdata']);$i++) {
                    echo "<tr>";
                    echo "<td>"; print_r ($_SESSION['cartdata'][$i][0]);echo "</td>";
                    echo "<td>"; print_r ($_SESSION['cartdata'][$i][1]);echo "</td>";
                    echo "<td>"; print_r ($_SESSION['cartdata'][$i][2]);echo "</td>";
                    echo "<td>"; print_r ($_SESSION['cartdata'][$i][3]);echo "</td>";
                    echo "<td>"; print_r ($_SESSION['cartdata'][$i][4]);echo "</td>";
                    echo "<td>"; print_r ($_SESSION['cartdata'][$i][5]);echo "</td>";
                    echo "</tr>"; 
                }
                                ?>
                                
                </tbody>
                </table>
            </div>
            <a href="" class="btn btn-primary" id="checkoutbutton">Checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- cart table -->
			<!---footer--->
			<?php include 'footer.php';?>
			<!---footer--->
			<script>
//                 $('#showProduct').DataTable( {
//     "ajax": "admin/handlerequest.php?cartdata=1"
// }); 
$('#showProduct').on('click','#deletecartproduct',function(){
    var id=$(this).data('id');
    $.ajax({
        url: 'admin/handlerequest.php',
        method: 'post',
        data: {
            prodid: id,
            deletecartproduct: true
        },success: function(msg){
            location.reload();
        },
        error: function(){
            alert("cart product deletion error");
        }
    });
});
$('#checkoutbutton').click(function(){
    $.ajax({
        url: "admin/handlerequest.php",
        method: "post",
        data: {
            checkout: true
        },
        success: function(msg){
            if (msg=="refer to login page") {
                $(location).attr('href','login.php');
            } else {
                console.log(msg);
                $(location).attr('href','checkout.php');
            }
        },
        error: function(){
            alert("error in checkout");
        }
    });
});
                </script>
			
</body>
</html>