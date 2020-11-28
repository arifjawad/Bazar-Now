<?php

if (isset($_POST["deletecart"])) {

	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE  user_id = '$_SESSION[uid]'";
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
	header("location:index.php");
}

 ?>
