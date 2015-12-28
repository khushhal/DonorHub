<?php
include('../masters/connection.php');
if (isset($_POST ['name']) && isset($_POST ['msg']) && isset($_POST ['email']))
{
	
	$name=htmlspecialchars($_POST['name'], ENT_QUOTES);
	$email=htmlspecialchars($_POST['email'], ENT_QUOTES);
	$msg=htmlspecialchars($_POST['msg'], ENT_QUOTES);

	if($email == "" || $name == "" ||  $msg == "")
	{
		echo '0';
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo '1';
	}
	else if(strlen($msg) > 1000)
	{
		echo '2';	
	}
	else
	{
		echo '3';	
	}
}
else
{
	header('location:'.$http);	
}
?>