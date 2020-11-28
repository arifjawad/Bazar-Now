<style >
/*card*/

.cont{
	width: 100%;
	background-position: center;
	background-attachment: fixed;
	background-repeat: no-repeat;
	background-image: url("../img/background/back2.jpg");
}
.card {
	background-color: white;

  max-width: 760px;
  margin: auto;
  text-align: center;
	margin-top: 5px;

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

.card:hover{
	box-shadow: 0 4px 8px 2px rgba(0, 0, 0, 0.2);
}
.fade-in {
  animation: fadeIn ease 2s;
}
@keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

/*card*/
</style>



<?php
include 'db.php';
include 'include/header.php';

	if(isset($_SESSION["uid"])){

	$user_id = $_SESSION["uid"];
	$sql = "SELECT * FROM delivery_person WHERE delivery_person_id = '$user_id'";
		$query = mysqli_query($con,$sql);
		while ($row=mysqli_fetch_array($query)) {
		$user_id = $row["delivery_person_id"];
			$delivery_person_name = $row["delivery_person_name"];

			$delivery_person_email = $row["delivery_person_email"];
			$delivery_person_nid=$row["delivery_person_nid"];
			$delivery_person_phone = $row["delivery_person_phone"];

			$delivery_person_photo=$row["delivery_person_photo"];


}
}

?>

<div class="row">
    <?php include 'include/sidenav.php'; ?>
		<div class="cont">
			<div class="card fade-In">
		 <div class="row">

			 <div class="col-md-7">


				   <img src="../img/deliveryPersonPics/<?php echo $delivery_person_photo ;?>" alt="photo" ><br><br>

				   <h5>Hi I'm <?php echo $delivery_person_name ;?> </h5>

				 </div>
							<div class="col-md-4"><br><br>
				       <strong>National ID :</strong>
				       <p><?php echo $delivery_person_nid ;?></p>
				       <strong>Email ID :</strong>
				       <p><?php echo $delivery_person_email ;?></p>

				       <strong>Phone Number :</strong>
				       <p><?php echo $delivery_person_phone;?></p>



				   <a href="#"><i class="fa fa-dribbble"></i></a>
				   <a href="#"><i class="fa fa-twitter"></i></a>
				   <a href="#"><i class="fa fa-linkedin"></i></a>
				   <a href="#"><i class="fa fa-facebook"></i></a>
					  </div></div>


		</div>
</div>
</div>
<?php include 'include/footer.php' ;?>
