<?php
include('../masters/connection.php'); 
include('../masters/header.php');  
$csql = "select DISTINCT city_name from cities ORDER BY city_name";
$cres = mysqli_query($con,$csql);

?>

 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 settings-section">
 <h4>Account Settings</h4>
 	<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 block1">
    <form>
    	<div class="col-lg-12">
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        	Old Password:
        	</div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        	<input type="password" name="opass" class="opass" required>
        	</div>
        </div>
        
        <div class="col-lg-12">
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        	New Password:
        	</div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        	<input type="password" name="npass" class="spass" id="opass"  onblur="signpass(this,document.getElementById('spass'));" placeholder="Enter Password" required><span id="spass"></span>
        	</div>
        </div>
        
        <div class="col-lg-12">
        	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        	Repeat New Password:
        	</div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        	<input type="password" name="rnpass" class="srpass" onblur="signcpass(this,document.getElementById('srpass'));" required="required" placeholder="Re - Enter Password"><span id="srpass"></span>
        	</div>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        	<input type="button" value="Update Password" id="update_pass">
        </div>
       </form> 
       <div class="col-lg-12" id="pass_error">
        	
        </div>
    </div>
    
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 block2">
    <img src="../images/Delete-32.png">
    <form method="post" action="delete.php">
    <input type="submit" id="delete" value="Delete Account" />
    </form>
    </div>
  
 </div>
            
<?php include('../masters/footer.php');  ?>            
       
       