<?php 
include('../masters/connection.php');
if(isset($_POST['city']) && isset($_POST['city']))
{
include('../masters/header.php');
$city = mysqli_real_escape_string($con,$_POST['city']);
$group = mysqli_real_escape_string($con,$_POST['group']);
$fsql = mysqli_query($con,"select id,name,email,phone,city,age,gender,bloodgroup,lastdonate,flag from donors where flag = '1' AND city = '$city' AND bloodgroup = '$group' ORDER BY id DESC ");
$dcount = mysqli_num_rows($fsql);
?>
            
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 donor-section">
            
            <?php if($dcount > 0){?>
            
            <h1>Details of <?php echo $group; ?> Donors at <?php echo $city; ?></h1>
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-block">
            <?php
			while($frow = mysqli_fetch_array($fsql))
			{
			?>
            	<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 parent-contact">
                	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block">
                    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block1">
                        	<div><h2><?php echo $frow['bloodgroup']; ?></h2></div>
                            <h3><?php echo $frow['name']; ?></h3>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blocks">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            	<img src="../images/Gender-32.png" />
                             </div>
                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo $frow['gender']; ?></div>
                        </div>  
                        
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blocks">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            	<img src="../images/Birthday-32.png" />
                             </div>
                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo date_diff(date_create($frow['age']), date_create('today'))->y; ?>&nbsp;years</div>
                        </div>
                        
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blocks">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            	<img src="../images/Date From-32.png" />
                             </div>
                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo $frow['lastdonate']; ?></div>
                        </div>
                        <?php
						if(isset($_SESSION['flag']) && $_SESSION['flag'] == true)
						{
						?>
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blocks">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            	<img src="../images/Email-32.png" />
                             </div>
                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo $frow['email']; ?></div>
                        </div>
                        
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blocks">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            	<img src="../images/Cell Phone Filled-32.png" />
                             </div>
                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"><?php echo $frow['phone']; ?></div>
                        </div>
                        
                       <?php } 
					   else
					   {
						   ?>
						 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blocks">
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            	<img src="../images/Key-32.png" />
                             </div>
                             <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">Login for more details</div>
                        </div>
                    	   
					   <?php }?>  
    	
                        </div>

                    </div>
            <?php
			}
			?>
                </div>

			<?php }
			else
			{?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 notfound">
				<img src="../images/sad_smiley.png">
    <p>Sorry No <b><?php echo $group; ?></b> Donors Found At <b><?php echo $city; ?></b> 
    </p>
    	
    </div>
			<?php }?>
            </div>
       
       <?php include('../masters/footer.php');  

}
else
{
	header('location:'.$http);	
}?>      