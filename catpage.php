<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    include_once 'admin/tbl_product.php';
    $product=new tbl_product();
    $heading=$product->getPageHeading($id);
    $datacon=$product->getCatPageData($id);
    if ($heading==false || $datacon==false) {
        header("location:index.php");
    }
    $html1=$heading['html'];
} else {
    header('Location:index.php');
}

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
   <!-- content -->
   <div class="content">
    <div class="linux-section">
        <div class="container">
            <div class="linux-grids">
                <div class="col-md-8 linux-grid">
                <h2><?php echo $heading['prod_name'] ?></h2>
                <ul>
                    <?php echo $html1?>
                </ul>
                    <a href="#myTab">view plans</a>
                </div>
                <div class="col-md-4 linux-grid1">
                    <?php
                    $patternarray=array("/window/i", "/word/i", "/cms/i", "/linux/i", "/mac/i");
                    $temp=true;
                    foreach ($patternarray as $val) {
                        if (preg_match($val, $heading['prod_name'])) {
                            $temp=false;
                            $str=str_replace("/", "", $val);
                            $strfinal=rtrim($str, "i");
                            echo '<img src="images/'.$strfinal.'.png" class="img-responsive" alt=""/>';
                            break;
                        }
                    }
                    if ($temp==true) {
                        echo '<img src="images/window.png" class="img-responsive" alt=""/>';
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="tab-prices">
        <div class="container ">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <div id="myTabContent" class="tab-content justify-content-center">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="linux-prices" id="myTab">
                            <?php
                           
                            $html="";
                            for ($i=0;$i<count($datacon);$i++) {
                                

                                $html.='<div class="col-md-3 linux-price">
                                    <div class="linux-top">
                                    <h4>Standard</h4>
                                    </div>
                                    <div class="linux-bottom">
                                        <h5>₹'.$datacon[$i]["mon_price"].' <span class="month">per Month</span></h5>
                                        <h5>₹'.$datacon[$i]["annual_price"].' <span class="month">per Annum</span></h5>
                                        <h6>Single Domain</h6>
                                        <ul>
                                        <li><strong>'.$datacon[$i]["webspace"].'GB </strong> Web Space</li>
                                        <li><strong>'.$datacon[$i]["bandwidth"].'GB </strong>Bandwidth</li>
                                        <li><strong>'.$datacon[$i]["mailbox"].' </strong> Mailbox</li>
                                        <li><strong>'.$datacon[$i]["freedomain"].' </strong> Free Domain</li>
                                        <li><strong>'.$datacon[$i]["languagetechnology"].' </strong> Language/Technology</li>
                                        <li><strong>High Performance</strong>  Servers</li>
                                        <li><strong>location</strong> : <img src="images/india.png"></li>
                                        </ul>
                                    </div>
                                    <a onclick="cart('.$datacon[$i]["prod_id"].')"  id="addtocart">buy now</a>
                                </div>';
                            }
                            print_r($html);
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- clients -->

    <!-- content -->
			<!---footer--->
			<?php include 'footer.php';?>
			<!---footer--->
			
		<script>
        function cart(id ){
            console.log(id);
            $.ajax({
                url: 'admin/handlerequest.php',
                method: 'post',
                data: {
                    prodid: id,
                    addtocart: true
                },
                success: function(msg){
                    console.log(msg);
                    // $(location).attr('href','cart.php');
                },
                error: function(){
                    alert("error in fetching product");
                }
            });


        }</script>	
</body>
</html>