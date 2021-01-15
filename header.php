<!---header--->
<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<i class="sr-only">Toggle navigation</i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
							<i class="icon-bar"></i>
						</button>
						<div class="navbar-brand">

							<h1>
							<strong>	<span style="color:#e7663f">CED<em><span style="color: #585CA7;">HOSTING</span>
								</span></em></strong>
							</h1>
						</div>
					</div>


					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class=active><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
							<li class=><a href="about.php">About</a></li>
							<li class=><a href="services.php">Services</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
								<ul class="dropdown-menu">
								<?php
								include 'product.php';
											$navobj = new product();
											$res = $navobj->nav();
											$row = $res->num_rows;
											for($i=0;$i<$row;$i++){
												   $resultobj = $res->fetch_assoc();
												   ?>
				<li>   <a href="hosting.php?id=<?php echo $resultobj['id'];?>&name=<?php echo $resultobj['prod_name'];?>"> <?php  echo $resultobj['prod_name'];
				?></a></li>
												 
<?php
											}



															
											?>
				<!-- <li><a href="cmshosting.php">CMS Hosting</a></li>
									<li><a href="wordpresshosting.php">WordPress Hosting</a></li>
									<li><a href="catpage.php?id=26">Mac Hosting</a></li>
									<li><a href="windowshosting.php">windows hosting</a></li>
									<li><a href="linuxhosting.php">Linux Hosting</a></li> -->
							
								</ul>
							</li>
							<li class=><a href="pricing.php">Pricing</a></li>
							<li class=><a href="blog.php">Blog</a></li>
							<li class=><a href="contact.php">Contact</a></li>
							<li class=><a href="cart.php" id="fa-fa-font-size"><i class="fa fa-shopping-cart"><span
											class="badge badge-info"></span></i></a></li>
							<li class=><a href="login.php">Login</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
            </nav>
         
        </div>
        </div>
    