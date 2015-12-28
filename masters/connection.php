<?php
$con = mysqli_connect("localhost","root","","donorhub");
$sql = "select * from http where id = '1' ";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);
$http = $row['http'];

$usql = mysqli_query($con,"select DISTINCT city from donors  where flag = '1' ORDER BY city ");

session_start();
if(isset($_SESSION['login']) && !empty($_SESSION['login'])) {
	$_SESSION['flag'] = true;
	$ssql = mysqli_query($con,"select id,name,pass,email,phone,city,age,gender,bloodgroup,lastdonate,flag from donors where id = '".$_SESSION['user_id']."' ");
	$srow = mysqli_fetch_array($ssql);
	}
else
{
	$_SESSION['flag'] = false;
}

?>