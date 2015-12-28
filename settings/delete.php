<?php
include('../masters/connection.php'); 
mysqli_query($con,"INSERT INTO delete_donors SELECT * FROM donors where id = '".$_SESSION['user_id']."' ");
mysqli_query($con,"delete from donors where id = '".$_SESSION['user_id']."' ");

session_destroy();
header('location:'.$http.'delete/');


?>