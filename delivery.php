<?php include "db.php"; include "header.php";?>

<style>
.row-checkout {
  box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.2);
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin: 0 -16px;
  margin-bottom: 10px;
}
.col-25 {
  -ms-flex: 25%;
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%;
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%;
  flex: 75%;
}
.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container-checkout {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text],input[type=submit] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=submit] {
  width: 30%;
  margin-bottom: 20px;
  margin-left: 35%;
  padding: 12px;
  border: 1px solid green;
  border-radius: 3px;
  color:#00ac00;
}
label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.checkout-btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.checkout-btn:hover {
  background-color: #45a049;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row-checkout {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
  .map{
    margin-left: 0%;
  }

}


/*card*/

.card {
  box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.2);

  width: 100%;
  margin: auto;
  text-align: center;
}
.card img{
  width:100%;
  height:280px;
}
.title {
  color: grey;
  font-size: 18px;
}
h5{
  font-size: 22px;
  color: #785b0b;
}
button {
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



button:hover, a:hover {
  opacity: 0.7;
}
/*card*/

/*map*/

.map{
  box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.2);
  text-align: center;
  border-width: medium;

  padding:3px;
  margin-left: 40%;
}
#map-canvas {
  height: 360px;
  margin:10px;

}

@media (max-width: 600px) {

  .card img{
    height: 180px;
  }
  .map{
    margin-left: 0%;
  }
}

</style>




<section class="section">
	<div class="container">
		<div class="row-checkout">
		<?php
		if(isset($_SESSION["uid"])){

        	$user_id = $_SESSION["uid"];
        	$sql = "SELECT * FROM user_info WHERE user_id = '$user_id'";
        		$query = mysqli_query($con,$sql);
        		while ($row=mysqli_fetch_array($query)) {
        		$user_id = $row["user_id"];
        			$first_name = $row["first_name"];
        			$last_name = $row["last_name"];
        			$email = $row["email"];
        			$password = $row["password"];
        			$mobile = $row["mobile"];
        			$address=$row["address1"];
        			$user_img=$row["user_img"];


        }}
?>


       <div class="card">
          <p class="title">Your Info:</p>
         <div >
         <img class="imgs" src="img/user_pics/<?php echo $user_img ;?>" alt="photo" >
          </div>
         <h1><?php echo $first_name ;?> <?php echo $last_name ;?> </h1>

             <strong>Email ID :</strong>
             <p><?php echo $email;?></p>

             <strong>Phone Number :</strong>
             <p><?php echo $mobile;?></p>

             <strong>Address :</strong>
             <p><?php echo $address; ?></p>


       </div>

</div>

<div >



  <?php
  if(isset($_SESSION["uid"])){

$query1="
SELECT user_id,picked_by_id FROM orders_drawer WHERE user_id='".$_SESSION['uid']."'";



	$sql = "SELECT * FROM delivery_person WHERE delivery_person_id =1 ";
  		$query = mysqli_query($con,$sql);
  		while ($row=mysqli_fetch_array($query)) {
  		$delivery_person_id = $row["delivery_person_id"];
  			$delivery_person_name = $row["delivery_person_name"];

  			$delivery_person_email = $row["delivery_person_email"];
  			$delivery_person_nid = $row["delivery_person_nid"];
  			$delivery_person_photo = $row["delivery_person_photo"];
  			$delivery_person_phone=$row["delivery_person_phone"];
        $_SESSION["deli_P_id"]=$delivery_person_id;




  ?>
  <div class="row">
    <div class="col-md-3 col-xs-10">




<div class="card">
  <img src="img/deliveryPersonPics/<?php echo $delivery_person_photo ;?>" alt="photo" ><br><br>
  <h5>Hi I'm <?php echo $delivery_person_name ;?> </h5>


      <strong>National ID :</strong>
      <p><?php echo $delivery_person_nid ;?></p>
      <strong>Email ID :</strong>
      <p><?php echo $delivery_person_email ;?></p>

      <strong>Phone Number :</strong>
      <p><?php echo $delivery_person_phone;?></p>


<?php }} ?>

         <p><button class="button"><a href="chat/index.php" style="color:white;">Chat </a></button></p>


</div>

    </div>
<!--delivery ends-->

<!--map-->

<div class="col-md-9 col-xs-10">
<div class="map">

<div class="">
	<p><span id="speed"></span>MPH</p>
	<p>Latitude: <span id="latitude"></span></p>
	<p>Longitude: <span id="longitude"></span></p>
	<p>Altitude: <span id="altitude"></span></p>
	<p>Heading: <span id="heading"></span></p>
	<p>Update: <span id="update"></span></p>
</div>

<div id='map-canvas'class="col-xl-8 " ></div>

  <script  src="onlinetest/scriptWatch.js"></script>
  <script type='text/javascript'src='https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places,weather'></script>
</div>
<!--map-->
  </div></div>
</div>
</div>
</section>

<?php
include "footer.php";
?>
