<?php

//fetch_user.php

include('database_connection.php');
include '../db.php';
session_start();

$query = "
SELECT * FROM delivery_person
WHERE delivery_person_id = '".$_SESSION['deli_P_id']."'";
/*WHERE delivery_person_id = '".$_SESSION['deli_P_id']."'*/
$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output ='';

foreach($result as $row)
{
 $output .= '

  <button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['delivery_person_id'].'" data-tousername="'.$row['delivery_person_name'].'">Start Chat</button>

 ';
}





echo $output;

?>
