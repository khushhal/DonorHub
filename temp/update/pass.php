<?php
if (isset($_POST['opass']) && isset($_POST ['pass']) && isset($_POST ['rpass']))
{
	include('../masters/connection.php');
	
	$opass=$_POST['opass'];
	$npass=$_POST['pass'];
	$rnpass=$_POST['rpass'];
	if(md5($opass) != $srow['pass'])
	{
		echo '0';	
	}
	else
	{
		if(strlen($npass) < 8 || strlen($rnpass) < 8)
		{
			echo '1';	
			
		}
		else if($npass != $rnpass)
		{
			echo '2';
			
		}
		else
		{
			$pass = md5($npass);
			mysqli_query($con,"update donors SET pass = '$pass' where id = '".$_SESSION['user_id']."' ");
			echo '3';
		}
	}
}
?>