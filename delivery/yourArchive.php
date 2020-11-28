<style >
/*card*/

.order-panel {
	background-color: white;
  box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.2);
	max-width: 90%;
  margin: auto;
  text-align: center;
	margin-top: 5px;
	margin-left: 10%;
	background-position: center;
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-image: url("../img/background/back2.jpg");
}

.title {
  color: grey;
  font-size: 18px;
}
h5{
  font-size: 22px;
  color: #785b0b;
}
.buttons {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  margin-bottom: 10px;
}
.buttons:hover, a:hover {
  opacity: 0.7;
}
@media (max-width: 540px) {
.order-panel{
	max-width: 100%;
	margin-left: 0;
}
}
/*card*/
</style>

<?php include 'include/header.php' ?>
<div class="row">
	<?php include 'include/sidenav.php' ?>


<div class="order-panel">

				<!--orderslist-->
				<?php

									include 'db.php';
										if(isset($_SESSION["uid"])){
											$user_id=$_SESSION["uid"];
								if(isset($_POST['completed']))
										{
										$completed=$_POST['completed'];


										mysqli_query($con,"update orders_drawer set completed='$completed'where picked_by_id='$user_id'")or die("Query 2 is inncorrect..........");

										header("location:yourArchive.php");
										mysqli_close($con);
										}
								}

					?>

					 <div class="container-fluid main-container">
														<div class=" content" style="margin-left:10px">
														<div class="panel-heading" style="background-color:#447984">

														<div class='table-responsive'>
														<div style="overflow-x:scroll;">
														<table class="table  table-hover table-striped" style="font-size:14px">


									<?php


														echo "<form action='yourArchive.php'method='POST'>

														</tr><input class='btn btn-success' type='submit' name='completed' value='completed'></form>
														";
														
									?>
														</table>
														</div>
														</div>
														<nav align="center">

								 <?php
														//counting paging
														$paging=mysqli_query($con,"select order_id from orders_info");
														$count=mysqli_num_rows($paging);
														$a=$count/3;
														$a=ceil($a);
														echo "<bt>";echo "<bt>";
														for($b=1; $b<=$a;$b++)
														{
														?>
														<ul class="pagination ">
														<li><a class="label-info" href="index.php?page=<?php echo $b;?>"><?php echo $b." ";?></a></li></ul>
									<?php
														}
														?>
														</nav>
														</div>
														</div>




				<!--orderslist-->
</div>
</div>
<?php include 'include/footer.php'; ?>
