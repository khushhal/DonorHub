<?php
include('../masters/connection.php'); 
if(isset($_SESSION['login']) && !empty($_SESSION['login']) && isset($_POST['flag']))
{
session_destroy();
header('location:'.$http);
}
else
{
	header('location:'.$http);
}

?>