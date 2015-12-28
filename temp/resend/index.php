<?php
include('../masters/connection.php'); 

$email=htmlspecialchars($_POST['email'], ENT_QUOTES);
$fsql = mysqli_query($con,"select email,valid from donors where email  = '$email' ");
$fcount = mysqli_num_rows($fsql);
$frow = mysqli_fetch_array($fsql);
if(empty($email) || $email == "")
{
	echo '0';
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	echo '1';
}
else if($fcount != 1)
{
	echo '2';
}
else if($frow['valid'] == 1)
{
	echo '3';
}
else
{

		

			
			/*$body = "Hi";
			include '../lib/PHPMailer.class.php';
			
			
			$from = "khushalgupta.98@gmail.com";
			$mail = new PHPMailer();
			$mail->IsSMTP(true); // SMTP
			$mail->set('X-MSMail-Priority', 'Normal');
			$mail->addCustomHeader("X-Priority: 3");
			$mail->SMTPAuth = true;  // SMTP authentication
			$mail->IsHTML(true);
			$mail->Mailer = "smtp";
			$mail->Host = "ssl://smtp.gmail.com";
			$mail->Port = 465;
			$mail->Username = "cse12to16@gmail.com";
			$mail->Password = "CSEROCKS";
			$mail->SetFrom($from, 'Donorhub');
			$mail->Subject = 'Your new password';
			$mail->MsgHTML($body);
			
			$mail->AddAddress($email);
			//$mail->AddReplyTo('prabal.asinfy@gmail.com', 'Prabal Garg');
	
			if (!$mail->Send())
			{
				echo '5';	
			
			 }  
			else
			   {
			     echo '4';	
			   }
		   
		 */ 
echo '4';	
	
}


?>