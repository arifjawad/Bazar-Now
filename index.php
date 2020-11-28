<?php include 'header.php' ?>
	<!-- HOME -->
	<div class="s1">


	<div id="home">
		<!-- container -->
		<div class="container" style="background-color: black;" >

			<div id="responsive-nav">

			</div>
			<!-- home wrap -->
			<div class="home-wrap">


				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner/im1.jpg" alt="">
						<div class="banner-caption text-center">
							<h1>SALE</h1>
							<h3 class="white-color font-weak">Up to 50% Discount</h3>
							<a href="testProductDisplay.php"><button class="primary-btn">Shop Now</button></a>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner/im2.jpg" alt="">
						<div class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn"><a href="testProductDisplay.php">Shop Now</a></button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="./img/banner/im3.jpg" alt="">
						<div class="banner-caption">
							<h1 class="white-color">NEW<span>Collection</span></h1>
							<button class="primary-btn"><a href="testProductDisplay.php">Shop Now</a></button>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->


	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container customized">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">New collections </h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-2 col-sm-6 col-xs-5">
					<div class="banner banner-2">
						<img src="./img/newcollection.jpg" alt="">
						<div class="banner-caption">
						<strong style="color:#FFF;font-size:20px;">NEW<br>COLLECTION</strong>
							<button class="primary-btn"><a href="testProductDisplay.php">Shop Now</a></button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-7">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							<!-- Product Single -->

							<?php
								include 'db.php';


							$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 1 AND 10";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_array($run_query)){
										$pro_id    = $row['product_id'];
										$pro_cat   = $row['product_cat'];
										$pro_brand = $row['product_brand'];
										$pro_title = $row['product_title'];
										$pro_price = $row['product_price'];
										$pro_image = $row['product_image'];

										$cat_name = $row["cat_title"];

										echo "
										<div class='col-md-3 col-xs-12' >
												<a href='product.php?p=$pro_id'>
												<div class='product'>
													<div class='product-img'>
														<img src='product_images/$pro_image' style='max-height: 170px;' alt='product image'>
														</div></a>
													<div class='product-body'>
														<p class='product-category'>$cat_name</p>
														<h3 class='product-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
														<h4 class='product-price header-cart-item-info'>$pro_price</h4>
													</div>
													<div class='add-to-cart'>
														<button pid='$pro_id' id='product' class='add-to-cart-btn ' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
													</div>
												</div>
											</div>
								";
							}
					;
				}
								?>

						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->

			<!-- row -->

			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container" >
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="./img/banner/im3.jpg" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn"><a href="testProductDisplay.php">Shop Now</a></button>
						</div>
					</div>
				</div>
				<!-- /banner -->

	
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6 serve">
					<a class="banner banner-1" href="#">
						<img src="./img/banner/im2.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section ">
		<!-- container -->
		<div class="container customized ">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Recent Products</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single product-hot">
						<div class="banner banner-2">

							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> <a href="testProductDisplay.php">Shop now</a></button>
							<img src="./img/img2.jpg" alt="">
						</div>
						<div class="product-body">

						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
							<!-- Product Single -->

							<?php
								include 'db.php';


							$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 70 AND 75";
							$run_query = mysqli_query($con,$product_query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_array($run_query)){
										$pro_id    = $row['product_id'];
										$pro_cat   = $row['product_cat'];
										$pro_brand = $row['product_brand'];
										$pro_title = $row['product_title'];
										$pro_price = $row['product_price'];
										$pro_image = $row['product_image'];

										$cat_name = $row["cat_title"];

										echo "	<div class='col-md-3 col-xs-12' >
													<a href='product.php?p=$pro_id'>
													<div class='product'>
														<div class='product-img'>
															<img src='product_images/$pro_image' style='max-height: 170px;' alt='product image'>
															</div></a>
														<div class='product-body'>
															<p class='product-category'>$cat_name</p>
															<h3 class='product-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
															<h4 class='product-price header-cart-item-info'>$pro_price</h4>
														</div>
														<div class='add-to-cart'>
															<button pid='$pro_id' id='product' class='add-to-cart-btn ' href='#'><i class='fa fa-shopping-cart'></i> add to cart</button>
														</div>
													</div>
												</div>";
							}
					;
				}
			?>


						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>

		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
</div>
<?php include 'footer.php' ?>
