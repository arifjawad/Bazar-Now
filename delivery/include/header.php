<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Bazaar now</title>
<link rel="icon" href="../img/cart.png">
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="../css/slick.css" />
	<link type="text/css" rel="stylesheet" href="../css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="../css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="../css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../css/style.css" />
	<link type="text/css" rel="stylesheet" href="../css/accountbtn.css"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->



</head>

<body>
	<!-- HEADER -->
	<header>

		<!-- header -->
		<div id="header">

			<div class="container">

				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="index.php">
							<img style="width:150px;"src="../img/logo/logo.png" alt="BAZAAR NOW">
						</a>
					</div>
					<!-- /Logo -->



				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<?php
													 include "db.php";
													if(isset($_SESSION["uid"])){
															$sql = "SELECT delivery_person_name FROM delivery_person WHERE delivery_person_id='$_SESSION[uid]'";
															$query = mysqli_query($con,$sql);
															$row=mysqli_fetch_array($query);

															echo '
																<li class="header-account dropdown default-dropdown">

														     <div class="dropdownn">
																<a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" style="color:white"><i class="fa fa-user-o"></i> Welcome,<br> '.$row["delivery_person_name"].'</a>
																<div class="dropdownn-content">

																	<a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>

																</div>
															</div></li>';

													}

													
																					 ?>


						<!-- /Account -->
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
		<!-- container -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">


				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
						<ul class="menu-list">
							<?php
							 include "db.php";
							 if(isset($_SESSION["uid"])){
									$sql = "SELECT delivery_person_name FROM delivery_person WHERE delivery_person_id='$_SESSION[uid]'";
									$query = mysqli_query($con,$sql);
									$row=mysqli_fetch_array($query);
									echo '
							<li><a href=""></a></li>';
            }
						else {
							echo '	<li><a href="index.php">LOGIN</a></li>';
							}	?>

					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->
