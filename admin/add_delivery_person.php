<?php

include("../db.php");

if(isset($_POST['submit']))
{
$delivery_person_name=$_POST['name'];

$delivery_person_email=$_POST['email'];
$delivery_person_password=$_POST['password'];
$delivery_person_nid=$_POST['nid'];
$delivery_person_phone=$_POST['mobile'];
$delivery_person_photo=$_POST['photo'];

mysqli_query($con,"insert into delivery_person (delivery_person_name,delivery_person_email,delivery_person_nid,delivery_person_photo,delivery_person_phone,delivery_person_password)
values ('$delivery_person_name','$delivery_person_email','$delivery_person_nid','$delivery_person_photo','$delivery_person_phone','$delivery_person_password')"
		)	or die ("Query 1 is inncorrect........");
header("location: delivery_persons.php");
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
  <h1><span class="glyphicon glyphicon-tag"></span>  Add Delivery Person  </h1></div><br>

<form action="add_delivery_person.php" name="form" method="post">


        <p>Name</p>
        <input class="input-lg thumbnail form-control" type="text" name="name" id="first_name" autofocus style="width:80%" placeholder="Name" required>

				<h3>Password</h3>
        <input class="input-lg thumbnail form-control" type="text" name="password" id="password" autofocus style="width:80%" placeholder=" Password" required>

   		<h3>Contact</h3>
        <p>Email</p>
        <input class="input-lg thumbnail form-control" type="text" name="email" id="email" autofocus style="width:80%" placeholder="Email" required>
         <p>Phn No</p>
         <input class="input-lg thumbnail form-control" type="text" name="mobile" id="mobile" autofocus style="width:80%" placeholder="Phn No" required>
				 <p>Add Image</p>
				 <div style="background-color:#CCC">
				 <input type="file" style="width:100%" name="photo" class="btn thumbnail" id="picture" >
				 </div>
<div align="center">
    <button type="submit" name="submit" id="submit" class="btn btn-default" style="width:80px; height:60px"> Cancel</button>
    <button type="submit" name="submit"  class="btn btn-success" style="width:100px; height:60px"> Submit</button>
    </div>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
