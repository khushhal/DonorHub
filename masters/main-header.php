<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DonorHub - Donate Someone Needs You</title>
<link rel="icon" type="image/png" href="<?php echo $http; ?>images/favicon.png">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript">
$('.carousel').carousel({
  interval: 2000
})
</script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Comfortaa:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="row">
    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrapper">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header">
            	<div class="col-lg-12 col-md-12 col-sm-0 hidden-sm col-xs-0 hidden-xs back-slider">
                        <div id="carousel-example-generic" class="carousel slide hidden-sm hidden-xs" data-ride="carousel">
            
              <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="<?php echo $http; ?>images/blood_slide_wall_3.jpg" alt="...">
                           <div class="carousel-caption">
                           <h2>Give a Helping Hand</h2>
                           <h3>To Those Who Needed</h3>
                           <p>Blood Join Us To Donate Blood</p>
                          </div>
                        </div>
                        <div class="item">
                          <img src="<?php echo $http; ?>images/blood_slide_wall_2.jpg" alt="...">
                          <div class="carousel-caption">
                           <h2>We Need Your Support to</h2>
                           <h3>Help Peoples Who Needed</h3>
                           <p>Blood Join Us To Donate Blood</p>
                          </div>
                        </div>
                        
                        <div class="item">
                          <img src="<?php echo $http; ?>images/blood_slide_wall_1.jpg" alt="...">
                          <div class="carousel-caption">
                           <h2>Find Right People At</h2> 
                           <h3>Right Place Who Are</h3>
                           <p>Ready To Donate Blood</p>
                          </div>
                        </div>
                      </div>
                        </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-content">
                	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 col-lg-push-1 col-md-push-1 col-sm-push-1 logo-panel">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo">
                    		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-6"><a href="<?php echo $http; ?>"><img src="<?php echo $http; ?>images/logo_K.png"></a></div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 search">
                            <form method="post" action="<?php echo $http; ?>donors/">
                            <input type="submit" value="Find">
                            <select name="city" required>
                            <option value="">Select City or Town</option>
                            <?php
                            	while($urow = mysqli_fetch_array($usql))
								{
								
							?>
                                        <option value="<?php echo $urow['city']; ?>"><?php echo $urow['city']; ?></option>
                                        
                            <?php
								}
							?>
                                        </select>
                            <select name="group" required>
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
                            </form>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 navigation">
                    	<ul>
                        	<li><a href="<?php echo $http; ?>">HOME</a></li>
                            <li><a href="<?php echo $http; ?>aboutus/">ABOUT US</a></li>
                            <li><a href="<?php echo $http; ?>contact/">CONTACT</a></li>
                            <li>
                            <?php 
							if(isset($_SESSION['flag']) && $_SESSION['flag'] == true) {
								
								echo $srow['name'];
							?>
                            <ul id="login_list">
                            	<li id="name-img"><div><h2><?php echo $srow['bloodgroup']; ?></h2></div></li>
                            	<li><a href="<?php echo $http; ?>profile/">My Profile</a></li>
                                <li><a href="<?php echo $http; ?>settings/">Settings</a></li>
                                <li><form method="post" action="<?php echo $http?>lib/logout.php">
                                	<input type="hidden" value="true" name="flag">
 									<input type="submit" value="Logout" />
                                    </form></li>
                            </ul>
							<?php
							}
							else
							{
							?>
                            <a href="<?php echo $http; ?>login/">SIGN IN</a>
                            <?php
							}
							?></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>