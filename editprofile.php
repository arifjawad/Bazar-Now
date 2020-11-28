<?php include 'header.php' ?>

	<?php

	include "db.php";
	if (isset($_POST["update"])) {

		$f_name = $_POST["up_first_name"];
			$l_name = $_POST["up_last_name"];

		$email = $_POST['up_email'];
		$password1 = $_POST['up_password'];

		$mobile1 = $_POST['up_moblie'];
		$address1 = $_POST['up_address'];

		$name = "/^[a-zA-Z ]+$/";
		$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
		$number = "/^[0-9]+$/";

	if(empty($f_name)  ||empty($l_name) || empty($email) || empty($password1)  ||
		empty($mobile1) || empty($address1) ){

			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
				</div>
			";
			exit();
		} else {
			if(!preg_match($name,$f_name)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $f_name is not valid..!</b>
				</div>
			";
			exit();
		}

		if(!preg_match($emailValidation,$email)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>this $email is not valid..!</b>
				</div>
			";
			exit();
		}
		if(strlen($password1) < 2 ){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Password is weak</b>
				</div>
			";
			exit();
		}


		if(!preg_match($number,$mobile1)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Mobile number $mobile1 is not valid</b>
				</div>
			";
			exit();
		}
		if(!(strlen($mobile1) == 10)){
			echo "
				<div class='alert alert-warning'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<b>Mobile number must be 10 digit</b>
				</div>
			";
			exit();
		}}
 if (isset($_FILES["picture"]) ) {
		//picture coding
		$picture_name=$_FILES['picture']['name'];
		$picture_type=$_FILES['picture']['type'];
		$picture_tmp_name=$_FILES['picture']['tmp_name'];
		$picture_size=$_FILES['picture']['size'];

		if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
		{
			if($picture_size>=10000){

				$pic_name=time()."_".$picture_name;
			}
				move_uploaded_file($picture_tmp_name,"img/user_pics/".$pic_name);

	 mysqli_query($con,"update user_info set first_name='$f_name',last_name='$l_name',email='$email', password='$password1',mobile='$mobile1',address1='$address1',user_img='$pic_name' where user_id='$user_id'")or die("Query 2 is inncorrect..........");


	 mysqli_close($con);
	 }
}

}

?>



	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

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


						}}

						?>


						<div class="col-md-7 col-sm-7 col-xs-7 ">
							<h3>User Information</h3>


							<form action="editprofile.php" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="exampleFormControlInput1">First Name</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="up_first_name" placeholder="First Name" value="<?php echo $first_name ;?>">
								</div>
								<div class="form-group">
									<label for="exampleFormControlInput1">Last Name</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="up_last_name" placeholder="Last Name" value="<?php echo $last_name ;?>">
								</div>
								<div class="form-group">
									<label for="exampleFormControlInput2">Email address</label>
									<input type="email" class="form-control" id="exampleFormControlInput2" name="up_email" placeholder="name@example.com" value="<?php echo $email;?>">
								</div>
								<div class="form-group">
									<label for="exampleFormControlInput3">Password</label>
									<input type="tel" class="form-control" id="exampleFormControlInput2" name="up_password" placeholder="Password" value="<?php echo $password;?>">
								</div>

								<div class="form-group">
									<label for="exampleFormControlInput3">Phone Number</label>
									<input type="tel" class="form-control" id="exampleFormControlInput2" name="up_moblie" placeholder="Phone Number" value="<?php echo $mobile;?>">
								</div>

								<div class="form-group">
									<label for="exampleFormControlInput3">Address</label>
									<input type="text" class="form-control" id="exampleFormControlInput2" name="up_address" placeholder="name@example.com" value="<?php echo $address; ?>">
								</div>
								<p>Add Image</p>
								<div style="background-color:#CCC">
								<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
								</div>
								<button type="submit"  class="btn btn-info btn-block " name="update">Update Profile</button><br>
								<a href="userprofile.php"><button type="button"  class="btn btn-info btn-block " >Go to Profile</button></a>
							</form>



						</div>
						<!--User Info-->
					</div>
				</div>

				</div>




	<!-- /section -->
<?php include 'footer.php' ?>
