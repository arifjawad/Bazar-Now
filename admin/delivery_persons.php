<?php

include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$user_id=$_GET['delivery_person_id'];

/*this is delet quer*/
mysqli_query($con,"delete from delivery_person where delivery_person_id='$user_id'")or die("query is incorrect...");
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
<div class="col-sm-9" style="margin-left:10px">
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Delivery Persons </h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>Deliver Person Name</th>
			     <th>Deliver Person Name</th>
                <th>Deliver Person Email</th>
	<th><a href="add_delivery_person.php">Add New</a></th></tr>
<?php
$result=mysqli_query($con,"select delivery_person_name,delivery_person_id, delivery_person_email from delivery_person")or die ("query 2 incorrect.......");

while(list($delivery_person_name,$delivery_person_id, $delivery_person_email)=
mysqli_fetch_array($result))
{
echo "<tr><td>$delivery_person_name</td><td>$delivery_person_id</td><td>$delivery_person_email</td>";

echo"<td>
<a href='edit_user.php?delivery_person_id=$delivery_person_id'>Edit</a>
<a href='delivery_persons.php?delivery_person_id=$delivery_person_id&action=delete'>Delete</a>
</td></tr>";
}
mysqli_close($con);
?>
</table>
</div>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>
