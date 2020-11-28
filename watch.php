<?php
include 'db.php';
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
}
}

?>
<style media="screen">

.profile-container{
	z-index: 1;
	width: 180%;
	background-color:maroon;
	border: 3px;
	border-radius:5px;
		border-color: red;
			color: white;

}



.starter-template {
font-size:20px;

  text-align: center;

}
  #map-canvas {



       margin-left: 10%;
       padding: 22%;

    }




    .map{
      height: 100%;
      width: 60%;
    }


</style>

  <script type='text/javascript'src='https://maps.googleapis.com/maps/api/js?sensor=true&libraries=places,weather'></script>
  <script src='myLoc.js'></script>



<!-- partial:index.partial.html -->
<!-- section -->
<div class="profile-container">

     <div class="inner-container">

<!-- partial -->
<div class="starter-template">
	<p><span id="speed"></span>MPH</p>
	<p>Latitude: <span id="latitude"></span></p>
	<p>Longitude: <span id="longitude"></span></p>
	<p>Altitude: <span id="altitude"></span></p>
	<p>Heading: <span id="heading"></span></p>
	<p>Update: <span id="update"></span></p>
</div>

<div id='map-canvas' class="map">

</div>

</div>
     <!--User Info-->
   </div>


  <script  src="onlinetest/scriptWatch.js"></script>
