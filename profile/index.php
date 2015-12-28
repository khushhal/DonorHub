<?php
include('../masters/connection.php'); 
include('../masters/header.php');  
$csql = "select DISTINCT city_name from cities ORDER BY city_name";
$cres = mysqli_query($con,$csql);

?>

 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-lg-push-1 col-md-push-1 col-sm-push-1 col-xs-push-1 profile-section">
 <h4>View & Update your Profile Information</h4>
 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block1">
    	<div class="col-lg-12">
        <img src="../images/Email-32.png"><?php echo $srow['email']; ?>
        </div>
        <div class="col-lg-12">
        <img src="../images/Contacts-32.png"><?php echo $srow['name']; ?>
        </div>
        <div class="col-lg-12">
        <img src="../images/Gender-32.png"><?php echo $srow['gender']; ?>
        </div>
        <form>
        <div class="col-lg-12">
        <img src="../images/Birthday-32.png"><?php echo date_diff(date_create($srow['age']), date_create('today'))->y; ?>&nbsp;years
        </div>
        
        <div class="col-lg-12">
        <img src="../images/City Hall-32.png">
		<select name="city" class="scity" id="city" onblur="scity(this,document.getElementById('scity'));">
                            <option value="" disabled>Select City</option>
                            
            <?php
			 while($crow = mysqli_fetch_array($cres))
			 {
				
			?>
			 <option value="<?php echo $crow['city_name']; ?>" <?php if($srow['city'] == $crow['city_name']){?>selected<?php }?>><?php echo $crow['city_name']; ?></option>	 
			 <?php
             }
			 ?>
             </select><span id="scity"></span>
		
		
		
		
		<!--<?php echo $srow['city']; ?>-->
        </div>
        
        <div class="col-lg-12">
        <img src="../images/Donate Filled-32.png">
        <select name="ques" id="ques">
        <option value="" disabled>Want to Donate Blooad</option>
        <option value="1" <?php if($srow['flag'] == 1){?> selected <?php } ?> name="ques" onblur="sques(document.getElementById('sques'));" id="yes" >Yes</option>
        <option value="0" <?php if($srow['flag'] == 0){?> selected <?php } ?> name="ques" onblur="sques(document.getElementById('sques'));" id="no">No</option>
        <option></option>
        </select><span id="sques"></span>
        
        </div>
        
        
        <div class="col-lg-12 eques">
        <img src="../images/Cell Phone Filled-32.png"><input type="tel" value="<?php echo $srow['phone']; ?>" name="tel" class="stel" onblur="stel(this,document.getElementById('stel'));" placeholder="Enter Contact Number"><span id="stel"></span>
        </div>
        <div class="col-lg-12 eques">
        <img src="../images/Date From-32.png"><input type="date" name="donate">
        </div>
       
        <div class="col-lg-12">
        	<input type="button" value="Update" id="update">
        </div>
       </form> 
       <div class="col-lg-12" id="update_error">
        	
        </div>
    </div>
  
 </div>
            
<?php include('../masters/footer.php');  ?>            
       
       