<?php

session_start();

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
   	<div class="container-fluid main-container">
      <?php

                     include "../db.php";
                     if(isset($_POST['submitt']))
                     {


                        $sql = "SELECT * FROM admin_info WHERE admin_id='$_POST[submitt]'";
                        $query = mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($query);
                        include 'include/side_bar.php';
                        echo'	<div class="panel-heading" style="background-color:#c4e17f">
                        	<h1>Welcome  </h1></div><br>
                        	<div class="panel-body">';

                        }else {

                          echo'	<link rel="stylesheet" href="../css/style.css">
                          	<form action="index.php" method="POST">
              									<div class="billing-details jumbotron">
                                                  <div class="section-title">
                                                      <h2  >Login Here</h2>
                                                  </div>


                                                  <div class="form-group">
                                                     <label for="email">Email</label>
                                                      <input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required>
                                                  </div>

                                                  <div class="form-group">
                                                     <label for="email">Password</label>
                                                      <input class="input input-borders" type="password" name="password" placeholder="password" id="password" required>
                                                  </div>

                                                  <div class="text-pad" >


                                                  </div>

                                                      <input class="primary-btn btn-block"   type="submit" name="submitt"  Value="Login">

                                                      <div class="panel-footer"><h4 id="e_msg"></h4></div>

                                                        </div>

              								</form>';
                        }
      ?>



	<div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">

		<h3>
<?php  //success message
if(isset($_POST['success'])) {
$success = $_POST["success"];
echo "<h1 style='color:#0C0'>Your Product was added successfully &nbsp;&nbsp;  <span class='glyphicon glyphicon-ok'></h1></span>";
}
?></h3>
	</div>
</div></div>

</div>
<?php include("include/js.php"); ?>
</body>
</html>
