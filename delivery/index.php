<?php include 'include/header.php' ?>

<style media="screen">
  body{
    background-image: url(img/background1.png);
  }
</style>

<?php
               include "db.php";
                  if(isset($_SESSION["uid"])){
                  $sql = "SELECT delivery_person_name FROM delivery_person WHERE delivery_person_id='$_SESSION[uid]'";
                  $query = mysqli_query($con,$sql);
                  $row=mysqli_fetch_array($query);
                  include 'body.php';

                  }else {

                    include 'login_form.php';
                  }
?>


<?php include 'include/footer.php' ?>
