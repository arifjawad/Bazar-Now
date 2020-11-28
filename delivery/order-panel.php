<style >
/*card*/
.s2{
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-image: url("../img/background/back2.jpg");
}
.order-panel {
	background-color: white;
  box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.2);
	max-width: 90%;
  margin: auto;
  text-align: center;
	margin-top: 5px;
	margin-left: 10%;
}
th{
	background-color:	rgb(200,200,200);

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


<div class="order-panel s2">

				<!--orderslist-->
				<?php

									include 'db.php';
									if(isset($_SESSION["uid"])){

									$delivery_person_id= $_SESSION["uid"];
							   	}
									error_reporting(0);
									if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
									{
									$order_id=$_GET['order_id'];
									/*this is confirm query*/

								}
									//pagination
									$page=$_GET['page'];

									if($page=="" || $page=="1")
									{
									$page1=0;
									}
									else
									{
									$page1=($page*10)-10;
									}
					?>

 <div class="container-fluid main-container">
									<div class=" content" style="margin-left:10px">
									<div class="panel-heading" style="background-color:#447984">
									<h1 style="font-size:18px">Orders/ Page <?php echo $page;?> </h1></div><br>
									<div class='table-responsive'>
									<div style="overflow-x:scroll;">
									<table class="table  table-hover table-striped" style="font-size:14px">


				<?php

                  $result=mysqli_query($con,"select order_id, user_id, f_name, email, address, city, state, zip,
									prod_count, total_amt from orders_info WHERE order_id=1")or die ("query 1 incorrect.....");
									while(list($order_id,$userid,$cus_name,$email,$address,$city,$state,$zip_code,$total_prod,$total_amnt,$contact_no)=mysqli_fetch_array($result))
									{
									echo "<form action='yourArchive.php'method='POST'>
									<tr><th>Order ID:</th><td><label name='order_id'>$order_id</label></td>
									<th>Customer Name:</th><td><label name='cus_name'>$cus_name</label></td>
									<th>Customer ID</th><td><label name='userid'>$userid</label></td>
									<th>Email | Contact </th><td><label name='email'>$email</label></td>
									<th>Address</th><td><label name='address'>$address,$city,$state,$zip_code</label></td>
									<th>Total products</th><td><label name='total_prod'>$total_prod</label></td>
									<th>Total Amount</th><td><label name='total_amnt'>$total_amnt</label></td>
									</tr><input class='btn btn-success' type='submit' name='submit' value='Order Pick up'></form>
									";
									}
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
<?php include 'include/footer.php' ?>
