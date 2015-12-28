<?php
include('../masters/connection.php'); 
include('../masters/header.php');  
$csql = "select DISTINCT city_name from cities ORDER BY city_name";
$cres = mysqli_query($con,$csql);

?>

 <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 col-md-push-1 col-sm-push-1  col-xs-push-1 aboutus-section">
 <h2>About us</h2>
 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 block1">
    <p>
    There's a lot about NHSBT that might surprise you. We're a Special Health Authority in England and Wales: and while we're accountable to the Department of Health, we set a lot of our own standards and guidelines.
<br />
We're also a lot bigger than you might think. We employ around 6,000 people; from Head Office professionals, support teams and drivers to scientists, clinicians and research staff.
<br />
Through commitment and teamwork, the organisation ensures that 7,000 units of blood are provided to Hospitals in England and North Wales for patients every day. We also manage the NHS Organ Donor Register which helps save of improve the lives of many people every year.
    </p>
    </div>	
 
 
  
 </div>
            
<?php include('../masters/footer.php');  ?>            
       
       