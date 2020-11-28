<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bazaar now</title>
   <link rel="icon" href="img/cart.png">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" >

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" >
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" >

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" >

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" >
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css">
</head>


<body>
<!-- HEADER -->
<header>
<!-- header -->
	<div id="header">
		<div class="container">
			<div class="row">
				<div class="pull-left col-md-3 ">
					<!-- Logo -->
					<div class="header-logo col-xs-5">
						<a class="logo" href="index.php">
							<img style="width:100px;" src="./img/logo/logo.png" alt="BAZAAR NOW">
						</a>
					</div>
					<!-- /Logo -->
	</div>
					<!-- Search -->
					<div class="search-1">
						<div class=" header-search col-xs-5">
								<form action="search.php" method="POST">
									<input class="input search-input" type="text" name="search" placeholder="Enter your keyword">
									<button class="search-btn " type="submit" name="search_submit"><i class="fa fa-search"></i></button>
								</form>
							</div>
							</div>
					<!-- /Search -->


		<div id="responsive-nav">
       <div class="pull-left col-md-3 ">
        <div class="menu-nav">
				  	<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
				  	<ul class="menu-list">
						<li><a href="index.php">Home</a></li>
						<li><a href="testProductDisplay.php">Shop</a></li>

						<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="index.php">Home</a></li>
								<li><a href="testProductDisplay.php">Products</a></li>
								<li><a href="cart.php">Checkout</a></li>
								<li><a href="about.php">About</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>

<div class="col-md-3 search-2">
	<div class=" header-search">
			<form action="search.php" method="POST">
				<input class="input search-input" type="text" name="search" placeholder="Enter your keyword">
				<button class="search-btn " type="submit" name="search_submit"><i class="fa fa-search"></i></button>
			</form>
		</div>
		</div>
			    	<div class="pull-right col-md-3 ">


				     	<ul class="header-btns">
					 	<!-- Account -->
					    	<?php
								    include "db.php";
							    	if(isset($_SESSION["uid"])){
										$sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
										$query = mysqli_query($con,$sql);
										$row=mysqli_fetch_array($query);

								echo '<li class="header-account dropdown default-dropdown">
												<div class="header-btns-icon">
													<a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-o" aria-hidden="true" ></i></a>
														</div>
														 <div class="dropdownn">
															<a href="#" class="dropdownn whiter" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> Welcome,<br> '.$row["first_name"].'</a>
															<div class="dropdownn-content">
														<a href=""  data-toggle="modal" data-target="#profile" class="whiter"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
													<a href="logout.php" class="whiter" ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
												</div>
											</div></li>';
									}else{
											echo '<li class="header-account dropdown default-dropdown">
															<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
																<div class="header-btns-icon">
																	<i class="fa fa-user-o"></i>
																	</div>
																	<div class="dropdownn ">
                                  <a href="#" class="dropdownn " data-toggle="modal" data-target="#myModal" > My account <i class="fa fa-caret-down whiter"></i></a>
                                </div>
	  													</div>
  													<ul class="custom-menu">
													<li><a href="" data-toggle="modal" data-target="#Modal_login"><i  class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
												<li><a href=""  data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i> Create An Account</a></li>
											</ul>
										</li>';
								}
					 ?>

						<!-- /Account -->
					<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<i class="fa fa-shopping-cart whiter"></i>
								<div class="header-btns-icon whiter">
									<i class="fa fa-shopping-cart"></i>
									<div class="badge qty">0</div>
  								</div>
	  							<strong class="text-uppercase whiter ">My Cart</strong>
								<br>
							</a>
							<div class="custom-menu " >
								<div class="cart-dropdown">
									<div class="cart-list" id="cart_product"></div>
									<div class="shopping-cart-btns">

										<button class="main-btn" name="deletecart" id="remove" ><a href="" >Clear cart
										 <i class="fa fa-edit"></i></a></button>
										<button class="primary-btn"><a href="cart.php">Checkout <i class="fa fa-arrow-circle-right"></i></a></button>
									</div>
								</div>
							</div>
						</li>

					<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>

			</div>
			<!-- header -->

		</div>
	</div>
		<!-- container -->
</header>
	<!-- /HEADER -->



	<!-- NAVIGATION -->

		<!-- container -->


		<!-- /container -->

	<!-- /NAVIGATION -->

	<!--login reg starts-->

				<div class="modal fade" id="Modal_login" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<div class="modal-body">
												<?php	include "login_form.php";	?>
											</div>
											</div>
										</div>
									</div>
			  <div class="modal fade" id="Modal_register" role="dialog">
										<div class="modal-dialog" style="">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>
												<div class="modal-body">
												<?php	include "register_form.php";	?>
												</div>
											</div>
										</div>
									</div>
				<div class="modal fade" id="profile" role="dialog">
									<div class="modal-dialog">
										<div class="">
											<?php	include 'profile.php';	?>
											</div>
										</div>
									</div>
