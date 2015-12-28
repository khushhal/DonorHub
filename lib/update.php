<?php
include('../masters/connection.php');
if (isset($_POST ['city']) && isset($_POST ['ques']) && isset($_SESSION['login']) && !empty($_SESSION['login']))
{
	
	$city=htmlspecialchars($_POST['city'], ENT_QUOTES);
	$ques=htmlspecialchars($_POST['ques'], ENT_QUOTES);
	
	if($ques == '1')
	{
		$date=$_POST['date'];
		$phone=htmlspecialchars($_POST['phone'], ENT_QUOTES);
		if(strlen($phone) != 10)
		{
			echo '0';	
		}
		else if(empty($date) || $date == "")
		{
			mysqli_query($con,"update donors SET phone = '$phone', city = '$city', flag = '$ques' where id = '".$_SESSION['user_id']."' ");
			echo '2';
		}
		else
		{
			$check = date_diff(date_create($date), date_create('today'))->y;
			if($check == 0)
			{
				echo '1';	
			}
			else
			{
			mysqli_query($con,"update donors SET phone = '$phone', city = '$city', flag = '$ques', lastdonate = '$date' where id = '".$_SESSION['user_id']."' ");
			echo '2';
			}
			
		}
	}
	
	else
	{
		if(empty($date) || $date == "")
		{
			mysqli_query($con,"update donors SET city = '$city', flag = '$ques' where id = '".$_SESSION['user_id']."' ");
			echo '2';
		}
		else
		{
			$check = date_diff(date_create($date), date_create('today'))->y;
			if($check == 0)
			{
				echo '1';	
			}
			else
			{
			mysqli_query($con,"update donors SET  city = '$city', flag = '$ques', lastdonate = '$date' where id = '".$_SESSION['user_id']."' ");
			echo '2';
			}
		}
	}
}
else
{
	header('location:'.$http);		
}
?>