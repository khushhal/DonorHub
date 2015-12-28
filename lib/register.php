<?php
include('../masters/connection.php'); 
if((isset($_POST['email'])) && (isset($_POST['pass']))  && (isset($_POST['rpass']))  && (isset($_POST['city']))  && (isset($_POST['name']))  && (isset($_POST['gender']))  && (isset($_POST['age']))  && (isset($_POST['group']))  && (isset($_POST['ques'])))
{
	$email=htmlspecialchars($_POST['email'], ENT_QUOTES);
	$pass=md5($_POST['pass']);
	$rpass=md5($_POST['rpass']);
	$city=htmlspecialchars($_POST['city'], ENT_QUOTES);
	$name=htmlspecialchars($_POST['name'], ENT_QUOTES);
	$gender=htmlspecialchars($_POST['gender'], ENT_QUOTES);
	$age=$_POST['age'];
	$group=$_POST['group'];
	$phone=htmlspecialchars($_POST['phone'], ENT_QUOTES);
	$date=$_POST['date'];
	$ques=htmlspecialchars($_POST['ques'], ENT_QUOTES);
	
	$diff = date_diff(date_create($age), date_create('today'))->y;
	
	$gsql = "select email from donors where email = '$email' ";
	$gres = mysqli_query($con,$gsql);
	$count = mysqli_num_rows($gres);
	
	if($email == "" || $pass == "" || $rpass == "" || $city == "" || $name == "" || $gender == "" || $age == "" || $group == "" || $ques == "")
	{
		echo '0';
	}
	else if($count > 0)
	{
		echo '1';
	}
	else if($ques == 1 && empty($phone))
	{
		echo '0';	
	}
	else if($ques == 1 && strlen($phone) != 10)
	{
		echo '0';	
	}
	else if($diff < 17 || $diff > 65)
	{
		echo '2';	
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
		echo '1';
	}
	
	else
	{
		if(empty($date) || $date == "")
		{
			$date = "Not Donated Yet";
		}

	$rsql = "insert into donors (email,pass,city,name,gender,age,bloodgroup,phone,lastdonate,flag,valid) values ('$email','$pass','$city','$name','$gender','$age','$group','$phone','$date','$ques','0') ";

	mysqli_query($con,$rsql);
	echo '3';
	
	}
}
else
{
	header('location:'.$http);	
}

?>