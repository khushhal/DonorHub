<?php
include('../masters/connection.php'); 
include('../masters/header.php');  
$csql = "select DISTINCT city_name from cities ORDER BY city_name";
$cres = mysqli_query($con,$csql);
$msg = null;
$msg1 = null;
if (isset($_POST['email-signin']) && isset($_POST ['pass-signin']))
{
	$email = htmlspecialchars(mysqli_real_escape_string($con,$_POST['email-signin']), ENT_QUOTES);
	$pass = mysqli_real_escape_string($con,$_POST['pass-signin']);
	$lsql = mysqli_query($con,"select id,email,pass,valid from donors where email = '$email'");
	$lcount = mysqli_num_rows($lsql);
	$lrow = mysqli_fetch_array($lsql);
	if($lrow['email'] == "")
	{
		$msg = "Oops! please check credentials";
	}
	else if($lcount == 1)
	{
		if($lrow['valid'] == 0)
		{
			$msg1 = "Please confirm your account<br>";
			$msg = "<input type='button' value='Resend confirmation Mail' id='resend' name='resend'>";
		}
		else if($lrow['pass'] == md5($pass))
		{
			session_start();
			$_SESSION['login'] = 'true';
			$_SESSION['user_id'] = $lrow['id'];
			header('location:'.$http);	
		}
		else
		{
			$msg = "Oops! please check credentials";	
		}
	}
	else
	{
		$msg = "Oops! please check credentials";	
	}
}
?>

<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 login-section-two">
<h2>Sign in or register</h2>
<p>Whether you are an existing donor or completely new to blood donation, your online account will allow you to do the following:</p>
<ul>
<li><p>Find out where you can donate and book an appointment</p></li>
<li><p>View, change or cancel appointments</p></li>
<li><p>Update your personal details</p></li>
<li><p>View your recent donation history</p></li>
</ul>
<p>If you want to register as a new blood donor then you must be aged between 17-65. You must use a unique email address that can only be accessed by that person.</p>
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 login-section-three">
	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 signin">
    	<h2>Sign In</h2>
        <form method="post" action="index.php">
        	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Email address</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="email" required="required" placeholder="Enter Email - ID" name="email-signin" />
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Password</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="password" name="pass-signin" required="required" placeholder="Enter Password" />
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="submit" value="Sign In" /><input type="button" value="Forgot Password ?" id="forget" />
            </div>
            
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h6 id="resend-error_msg">
            <?php 
					echo $msg1;
				?>
            </h6>
            <h6 id="login-error_msg">
            	<?php 
					echo $msg;
				?>
            </h6>
            </div>
        </form>
    </div>
    
    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12 register">
    	<h2>Register</h2>
        <form method="post">
        <div class="left col-lg-6 col-md-6 col-sm-6 col-xs-12">
        	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Email address</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="email" class="semail" required="required" placeholder="Enter Email - ID" onblur="signemail(this,document.getElementById('semail'));" name="email" />
            <h6 id="semail"></h6>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Password</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="password" class="spass" id="opass" name="pass" onblur="signpass(this,document.getElementById('spass'));" required="required" placeholder="Enter Password" />
            <h6 id="spass"></h6>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Re-enter Password</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="password" class="srpass" name="repass" onblur="signcpass(this,document.getElementById('srpass'));" required="required" placeholder="Re - Enter Password" />
            <h6 id="srpass"></h6>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>City</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <select name="city" class="scity" id="city" onblur="scity(this,document.getElementById('scity'));">
                            <option value="" selected>Select City</option>
                            
            <?php
			 while($crow = mysqli_fetch_array($cres))
			 {
				
			?>
			 <option value="<?php echo $crow['city_name']; ?>"><?php echo $crow['city_name']; ?></option>	 
			 <?php
             }
			 ?>
             </select>
             <h6 id="scity"></h6>
            <!--<input type="text" name="city" required="required" placeholder="Enter City" />-->
            </div>
            
             <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Want to register as Donor?</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 open">
            Yes <input type="radio" name="ques"  value="1" onblur="sques(document.getElementById('sques'));" id="yes" />
            No <input type="radio" name="ques" value="0" onblur="sques(document.getElementById('sques'));" id="no" />
            <h6 id="sques"></h6>
            </div>
            
           
            <h6 id="signup_error"></h6>
        </div>
        
        <div class="right col-lg-6 col-md-6 col-sm-6 col-xs-12">
        	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Name</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="name" required="required" class="sname" onblur="signname(this,document.getElementById('sname'));" placeholder="Enter Name" name="name" />
            <h6 id="sname"></h6>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Gender</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            Male <input type="radio" id="male" onblur="sgender(document.getElementById('sgen'));" name="gender" value="Male" />
            Female <input type="radio" id="female" onblur="sgender(document.getElementById('sgen'));" name="gender" value="Female" />
            <h6 id="sgen"></h6>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Date of Birth</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="date" name="age" required="required" class="sage" onblur="signage(this,document.getElementById('sage'));" placeholder="Enter Age" />
            <h6 id="sage"></h6>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Blood Group</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <select name="bgroup" id="bgroup" class="sgroup" onblur="sgroup(this,document.getElementById('sgroup'));">
                            <option value="" selected>Select Blood Group</option>
                            <option value="A+">Blood Group A+</option>
                                        <option value="A-">Blood Group A-</option>
                                        <option value="B+">Blood Group B+</option>
                                        <option value="B-">Blood Group B-</option>
                                        <option value="AB+">Blood Group AB+</option>
                                        <option value="AB-">Blood Group AB-</option>
                                        <option value="O+">Blood Group O+</option>
                                        <option value="O-">Blood Group O-</option>
                            </select>
                            <h6 id="sgroup"></h6>
            </div>
            <div class="ques col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Contact Number</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="tel" name="tel" required="required" class="stel" onblur="stel(this,document.getElementById('stel'));" placeholder="Enter Contact Number" />
            <h6 id="stel"></h6>
            </div>
            </div>
            
          <div class="ques col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h4>Last Blood Donate</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="date" name="date"  />
            </div>
            </div>
             <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <input type="button" value="Register now" id="register" />
            </div>
        </div>
        </form>
    </div>
</div>
            
<?php include('../masters/footer.php');  ?>            
       
       