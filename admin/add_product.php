<?php

include("../db.php");
session_start();


if(isset($_POST['submit']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$tags=$_POST['tags'];

//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['type'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];

if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
{
	if($picture_size<=50000000)

		$pic_name=time()."_".$picture_name;
		move_uploaded_file($picture_tmp_name,"../product_images/".$pic_name);

mysqli_query($con,"insert into products (product_cat, product_brand,product_title,product_price, product_desc, product_image,product_keywords) values ('$product_type','$brand','$product_name','$price','$details','$pic_name','$tags')") or die ("query incorrect");

 header("location: sumit_form.php?success=1");
}

mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>

   	 <?php include("include/header.php");?>
   	<div class="container-fluid">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:#c4e17f">
	<h1><span class="glyphicon glyphicon-tag"></span>  Add Product  </h1></div><br>
	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">
        <form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
        <p>Title</p>
        <input class="input-lg thumbnail form-control" type="text" name="product_name" id="product_name" autofocus style="width:100%" placeholder="Product Name" required>
<p>Description</p>
<textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="write here..." required></textarea>
<p>Add Image</p>
<div style="background-color:#CCC">
<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
</div>
</div>
<div class="well">
<h3>Pricing</h3>
<p>Price</p>
<div class="input-group">
      <div class="input-group-addon">Tk</div>
      <input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
    </div><br>


    </div>
        </div>
        <div class="col-lg-5">
        <div class="well">
<h3>Product type </h3>

<p>Category</p>
<input type="number" name="product_type" id="product_type" class="form-control" placeholder="1.Fruits and Vegetables,2.Baverages,3.Meet and Fish,4.Snaks,5.Dairy,6.Frozen and Canned,7.Bread and Bakery,8.Baking Needs,9.Cooking Needs,10.Diabetic foods,11.Cooking Items,12.Fish & Meats,13.Frozen Foods,14.Pet">

<br>
<p>Brand</p>
<input type="number" name="brand" id="brand" class="form-control" placeholder="1.FnV,2.Ispahani,3.Nestlle,4.Pepsi,5.MnF,6.Catbery,7.Bangla Dairy,8.Kazi Farm,9.Hosen,10.Pran,11.Danish,12.Wonder,13.Organic,14.Bashundhara">
<br>


<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Add Product</button>
    </div>
        </form>

	</div>
</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>
