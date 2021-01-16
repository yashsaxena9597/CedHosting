<?php
include_once 'admin/tbl_product.php';
$product=new tbl_product();
session_start();
?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php" style="color:#e7663f">CED<span style="color:#585CA7">Hosting<span></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
								
								<li><a href="services.php">Services</a></li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
									<?php
                            $data=$product->getSubCategoryNav();
                            if ($data!=false) {
                                for ($i=0;$i<count($data);$i++) {
                                    echo '<li ><a href="catpage.php?id='.$data[$i]['id'].'">'.$data[$i]['prod_name'].'</a></li>';
                                }
                            }
                            ?>
									
									</ul>			
								</li>
								<li><a href="pricing.php">Pricing</a></li>
								<li><a href="blog.php">Blog</a></li>
								
								<li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"><span class="badge badge-secondary"><?php echo count($_SESSION['cartdata'])?></span></a></i></li>

								<?php if(isset($_SESSION['user'])){?>
									<li><a href="logout.php">Logout</a></li>
								<?php } else { ?>
								<li><a href="login.php">Login</a></li>
								<?php }?>

							</ul>
									  
						</div><!-- /.navbar-collapse -->