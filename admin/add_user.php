<?php

include("../db.php");

if(isset($_POST['submit']))
{
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$user_password=$_POST['user_password'];
$mobile=$_POST['mobile'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];

mysqli_query($con,"insert into user_info(first_name, last_name,email,password,mobile,address1,address2) values ('$first_name','$last_name','$email','$user_password','$mobile','$address1','$address2')")
			or die ("Query 1 is inncorrect........");
header("location: manage_users.php");
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
<?php include("include/header.php"); ?>

<div class="container-fluid">
<?php include("include/side_bar.php"); ?>
   <div class="col-md-9 content" style="margin-left:10px">
    <div class="panel panel-default">
  <div class="panel-heading" style="background-color:#c4e17f">
  <h1><span class="glyphicon glyphicon-tag"></span>  Add Product  </h1></div><br>

<form action="add_user.php" name="form" method="post">

<h3>Name</h3>
        <p>First Name</p>
        <input class="input-lg thumbnail form-control" type="text" name="first_name" id="first_name" autofocus style="width:80%" placeholder="First Name" required>
         <p>Last Name</p>
         <input class="input-lg thumbnail form-control" type="text" name="last_name" id="last_name" autofocus style="width:80%" placeholder="Last Name" required>

<h3>Password</h3>
        <input class="input-lg thumbnail form-control" type="text" name="password" id="password" autofocus style="width:80%" placeholder=" Password" required>

   <h3>Contact</h3>
        <p>Email</p>
        <input class="input-lg thumbnail form-control" type="text" name="email" id="email" autofocus style="width:80%" placeholder="Email" required>
         <p>Phn No</p>
         <input class="input-lg thumbnail form-control" type="text" name="mobile" id="mobile" autofocus style="width:80%" placeholder="Phn No" required>

<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:80px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit" class="btn btn-success" style="width:100px; height:60px"> Submit</button>
    </div>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
