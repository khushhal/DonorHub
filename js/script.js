
$(document).ready(function(e) {
	var http_root = "http://localhost:8080/Major%20Project%20-%20Sem7th/";
$('.header-content .navigation ul li:last-child').click(function(e) {
    $('.header-content .navigation ul li #login_list').toggle();
});
 



$('.ques').hide();
$('.wrapper .login-section-three .register .open input[type="radio"]').click(function() {
       if($(this).val() == '1') {
            $('.ques').show();           
       }

       else {
            $('.ques').hide();   
       }
   });
   
$(document).ready(function(){
    var check = $(".wrapper .profile-section .block1 div select#ques").val();
	if(check == '1') {
            $('.eques').show();           
       }

       else {
            $('.eques').hide();   
       }
});

$('.wrapper .profile-section .block1 div select#ques').click(function() {
       
	   if($(this).val() == '1') {
            $('.eques').show();           
       }

       else {
            $('.eques').hide();   
       }
   });

   
   
  $("#register").click(function(){
	var email=$("input[name=email]").val();
	var pass=$("input[name=pass]").val();
	var rpass=$("input[name=repass]").val();
	var city=$("#city").val();
	var name=$("input[name=name]").val();
	var gender=$('input[name=gender]:checked').val();
	var age=$("input[name=age]").val();
	var group=$("#bgroup").val();
	var phone=$("input[name=tel]").val();
	var date=$("input[name=date]").val();
	var ques=$('input[name=ques]:checked').val();
	
	
	var genderM=document.getElementById('male');
    var genderF=document.getElementById('female');
	var quesy=document.getElementById('yes');
    var quesn=document.getElementById('no');
	
	if((name.length == 0 || name == "" || name == null) && (email.length == 0 || email == "" || email == null) && (pass.length == 0 || pass == "" || pass == null) && (city.length == 0 || city == "" || city == null) && (rpass.length == 0 || rpass == "" || rpass == null) && (genderM.checked==false && genderF.checked==false) && (age.length == 0 || age == "" || age == null) && (group.length == 0 || group == "" || group == null) && (quesy.checked==false && quesn.checked==false))
	{
		$('.wrapper .login-section-three .register input.sname').css("border-color", "#FF4343");
		$('.wrapper .login-section-three .register input.semail').css("border-color", "#FF4343");
		$('.wrapper .login-section-three .register input.spass').css("border-color", "#FF4343");
		$('.wrapper .login-section-three .register .scity').css("border-color", "#FF4343");
		$('.wrapper .login-section-three .register input.srpass').css("border-color", "#FF4343");
		$('.wrapper .login-section-three .register input.sage').css("border-color", "#FF4343");
		$('.wrapper .login-section-three .register .sgroup').css("border-color", "#FF4343");
		$('.wrapper .login-section-three .register #male').css("border-color", "#FF4343");
		document.getElementById('signup_error').innerHTML = "Please fill these fields";
	}
	
	else if(email.length == 0 || email == "" || email == null)
	{
		$('.wrapper .login-section-three .register input.semail').css("border-color", "#FF4343");
		document.getElementById('semail').innerHTML = "";
		document.getElementById('semail').innerHTML = "Please enter Email-ID";
	}
	else if(!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test($('input[name=email]').val())))
	{
		$('.wrapper .login-section-three .register input.semail').css("border-color", "#FF4343");
		document.getElementById('semail').innerHTML = "";
		document.getElementById('semail').innerHTML = "Please enter valid Email-ID";
	}
	else if(name.length == 0 || name == "" || name == null)
	{
		$('.wrapper .login-section-three .register input.sname').css("border-color", "#FF4343");
		document.getElementById('sname').innerHTML = "";
		document.getElementById('sname').innerHTML = "Please enter Name";
	}
	else if(!(/^[a-zA-Z ]{2,30}$/.test($('input[name=name]').val())))
	{
		$('.wrapper .login-section-three .register input.sname').css("border-color", "#FF4343");
		document.getElementById('sname').innerHTML = "";
		document.getElementById('sname').innerHTML = "Please enter valid Name";
	}
	else if(pass.length == 0 || pass == "" || pass == null)
	{
		$('.wrapper .login-section-three .register input.spass').css("border-color", "#FF4343");
		document.getElementById('spass').innerHTML = "";
		document.getElementById('spass').innerHTML = "Please enter Password";
	}
	else if(pass.length < 8)
	{
		$('.wrapper .login-section-three .register input.spass').css("border-color", "#FF4343");
		document.getElementById('spass').innerHTML = "";
		document.getElementById('spass').innerHTML = "Password must be greater than 8 letters";
	}
	else if(rpass.length == 0 || rpass == "" || rpass == null)
	{
		$('.wrapper .login-section-three .register input.srpass').css("border-color", "#FF4343");
		document.getElementById('srpass').innerHTML = "";
		document.getElementById('srpass').innerHTML = "Please re-enter Password";
	}
	else if(pass != rpass)
	{
		$('.wrapper .login-section-three .register input.srpass').css("border-color", "#FF4343");
		document.getElementById('srpass').innerHTML = "";
		document.getElementById('srpass').innerHTML = "Password is not match";
	}
	else if(genderM.checked==false && genderF.checked==false)
	{
		document.getElementById('sgen').innerHTML = "";
		document.getElementById('sgen').innerHTML = "Please select Gender";
	}
	else if(age.length == 0 || age == "" || age == null)
	{
		$('.wrapper .login-section-three .register input.sage').css("border-color", "#FF4343");
		document.getElementById('sage').innerHTML = "";
		document.getElementById('sage').innerHTML = "Please enter your Date of Birth";
	}
	else if(city.length == 0 || city == "" || city == null)
	{
		$('.wrapper .login-section-three .register .scity').css("border-color", "#FF4343");
		document.getElementById('scity').innerHTML = "";
		document.getElementById('scity').innerHTML = "Please select a City";
	}
	else if(group.length == 0 || group == "" || group == null)
	{
		$('.wrapper .login-section-three .register .sgroup').css("border-color", "#FF4343");
		document.getElementById('sgroup').innerHTML = "";
		document.getElementById('sgroup').innerHTML = "Please select a Blood Group";
	}
	else if(quesy.checked==false && quesn.checked==false)
	{
		document.getElementById('sques').innerHTML = "";
		document.getElementById('sques').innerHTML = "Please select Yes or No";
	}
	else if(ques == '1' && (phone.length == 0 || phone == "" || phone == null))
	{
		$('.wrapper .login-section-three .register input.stel').css("border-color", "#FF4343");
		document.getElementById('stel').innerHTML = "";
		document.getElementById('stel').innerHTML = "Please enter your Contact number";	
	}
	else if(ques == '1' && (phone.length != 10 || !(/^[0-9]*$/.test($('input[name=tel]').val()))))
	{
		$('.wrapper .login-section-three .register input.stel').css("border-color", "#FF4343");
		document.getElementById('stel').innerHTML = "";
		document.getElementById('stel').innerHTML = "Please enter valid Contact number";	
	}
	else
	{
		document.getElementById('signup_error').innerHTML = "";		


	$.ajax({
		
		       type:"POST",
			   url:http_root +"lib/register.php",
			   data:{email:email,pass:pass,rpass:rpass,city:city,name:name,gender:gender,age:age,group:group,ques:ques,phone:phone,date:date},
			   async:false,
			   success: function(res){
				   
				   if(res == 0){
					   
					   document.getElementById('signup_error').innerHTML = "Please check the fields";	
					   
					 // $(".product-page-addcartresult").html(res); 
					   
					   }
					   else if(res == 1)
					   {
						   $('.wrapper .login-section-three .register input.semail').css("border-color", "#FF4343");
							document.getElementById('semail').innerHTML = "";
							document.getElementById('semail').innerHTML = "Email already exist!!";
						   document.getElementById('signup_error').innerHTML = "Account already exist! Please login";
					   }
					    else if(res == 2)
					   {
						   $('.wrapper .login-section-three .register input.sage').css("border-color", "#FF4343");
							document.getElementById('semail').innerHTML = "";
						   document.getElementById('signup_error').innerHTML = "Age must between 17 to 65";
					   }
					   else if(res == 3)
					   {
						   $(".wrapper .login-section-three .register").find("input[type=text],input[type=email],input[type=name], input[type=password], input[type=date], select, input[type=tel], input[type=radio]").val("");
						   $('input[name="ques"]').prop('checked', false);
						   $('input[name="gender"]').prop('checked', false);
						   document.getElementById('signup_error').innerHTML = "Thanks for giving a hand for help."+"<br>"+"Please Confirm your email id";	
					   }
					   
					   else{
						   alert("error");
				//$(".product-page-addcartresult").html("Something Happened Wrong, Please Check Your Internet Connecton!"); 		   
						   
						   
						   }
				   },
				   /*error: function(error){
					   
					  alert(error); 
					   
					   
					   }*/
		
		});
	}
		
	});
	

$("#update").click(function(){
	var phone=$("input[name=tel]").val();
	var ques=$("#ques").val();
	var ddate=$("input[name=donate]").val();
	var city=$("#city").val();
	
	var equesy=document.getElementById('yes');
    var equesn=document.getElementById('no');
	if(city.length == 0 || city == "" || city == null)
	{
		 document.getElementById('update_error').innerHTML = "Please select city";	
	}
	else if(equesy.checked==false && equesn.checked==false)
	{
		document.getElementById('sques').innerHTML = "";
		document.getElementById('sques').innerHTML = "Please select Yes or No";
	}
	else if(ques == '1' && (phone.length == 0 || phone == "" || phone == null))
	{
		$('.wrapper .profile-section .block1 div input[type="tel"]').css("border-color", "#FF4343");
		document.getElementById('stel').innerHTML = "";
		document.getElementById('stel').innerHTML = "Please enter your Contact number";	
	}
	else if(ques == '1' && (phone.length != 10 || !(/^[0-9]*$/.test($('input[name=tel]').val()))))
	{
		$('.wrapper .profile-section .block1 div input[type="tel"]').css("border-color", "#FF4343");
		document.getElementById('stel').innerHTML = "";
		document.getElementById('stel').innerHTML = "Please enter valid Contact number";	
	}
	else
	{
		

	$.ajax({
		
		       type:"POST",
			   url:http_root +"lib/update.php",
			   data:{city:city,ques:ques,phone:phone,date:ddate},
			   async:false,
			   success: function(res){
				   
				   if(res == 0){
					   
					   document.getElementById('update_error').innerHTML = "Please check contact number";	
					   
					
					   
					   }
					   else if(res == 1)
					   {
						   document.getElementById('update_error').innerHTML = "Invalid Donation Date";
					   }
					    else if(res == 2)
					   {
						   window.location = http_root +"profile";
					   }
					  
					   
					   else{
						   alert("error");
				
						   
						   
						   }
				   },
				  
		
		});
	}
	
});
 
 
 
 
 
$("#update_pass").click(function(){
	
	var opass=$("input[name=opass]").val();
	var pass=$("input[name=npass]").val();
	var rpass=$("input[name=rnpass]").val();
	
	if((opass.length == 0 || opass == "" || opass == null) && (pass.length == 0 || pass == "" || pass == null) && (rpass.length == 0 || rpass == "" || rpass == null))
	{
		 document.getElementById('pass_error').innerHTML = "Please fill these fields";
		 
	}
	else if(pass.length == 0 || pass == "" || pass == null)
	{
		
		document.getElementById('spass').innerHTML = "";
		document.getElementById('spass').innerHTML = "Please enter Password";
	}
	else if(pass.length < 8)
	{
		
		document.getElementById('spass').innerHTML = "";
		document.getElementById('spass').innerHTML = "Password must be greater than 8 letters";
	}
	else if(rpass.length == 0 || rpass == "" || rpass == null)
	{
		
		document.getElementById('srpass').innerHTML = "";
		document.getElementById('srpass').innerHTML = "Please re-enter Password";
	}
	else if(pass != rpass)
	{
		
		document.getElementById('srpass').innerHTML = "";
		document.getElementById('srpass').innerHTML = "Password is not match";
	}
	else
	{
		document.getElementById('srpass').innerHTML = "";

	$.ajax({
		
		       type:"POST",
			   url:http_root +"lib/pass.php",
			   data:{opass:opass,pass:pass,rpass:rpass},
			   async:false,
			   success: function(res){
				   
				   if(res == 0){
					   
					   document.getElementById('pass_error').innerHTML = "Please check old password";	
					   
					
					   
					   }
					   else if(res == 1)
					   {
						   document.getElementById('pass_error').innerHTML = "Password must be greater than 8 letters";
					   }
					   else if(res == 2)
					   {
						   document.getElementById('pass_error').innerHTML = "Password not matched";
					   }
					    else if(res == 3)
					   {
						   window.location = http_root +"settings";
					   }
					  
					   
					   else{
						   alert("error");
				
						   
						   
						   }
				   },
				  
		
		});
	}
	
}); 

$("#forget").click(function(){
	
	var email=$("input[name=email-signin]").val();
	if(email.length == 0 || email == "" || email == null )
	{
		 document.getElementById('login-error_msg').innerHTML = "Please enter email id";
		 
	}
	else if(!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test($('input[name=email-signin]').val())))
	{
		document.getElementById('login-error_msg').innerHTML = "Please enter valid email id";
	}
	else
	{
		document.getElementById('login-error_msg').innerHTML = "";
		$.ajax({
		
		       type:"POST",
			   url:http_root +"lib/forget.php",
			   data:{email:email},
			   async:false,
			   success: function(res){
				   
				   if(res == 0){
					   
					   document.getElementById('login-error_msg').innerHTML = "Please enter email id";	
					   
					
					   
					   }
					   else if(res == 1)
					   {
						   document.getElementById('login-error_msg').innerHTML = "Please enter valid email id";
					   }
					   else if(res == 2)
					   {
						   document.getElementById('login-error_msg').innerHTML = "Sorry!! Account Doesn't Exist";
					   }
					    else if(res == 3)
					   {
						   document.getElementById('login-error_msg').innerHTML = "An email is sent to your email id Please check";
					   }
					  
					   
					   else{
						   alert("error");
				
						   
						   
						   }
				   },
				  
		
		});
	
	}
	
	 });
	 
	 
	 
	 
$("#resend").click(function(){
	
	var email=$("input[name=email-signin]").val();
	if(email.length == 0 || email == "" || email == null )
	{
		 document.getElementById('resend-error_msg').innerHTML = "Please enter email id";
		 
	}
	else if(!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test($('input[name=email-signin]').val())))
	{
		document.getElementById('resend-error_msg').innerHTML = "Please enter valid email id";
	}
	else
	{
		document.getElementById('login-error_msg').innerHTML = "";
		$.ajax({
		
		       type:"POST",
			   url:http_root +"lib/resend.php",
			   data:{email:email},
			   async:false,
			   success: function(res){
				   
				   if(res == 0){
					   
					   document.getElementById('resend-error_msg').innerHTML = "Please enter email id";	
					   
					
					   
					   }
					   else if(res == 1)
					   {
						   document.getElementById('resend-error_msg').innerHTML = "Please enter valid email id";
					   }
					   else if(res == 2)
					   {
						   document.getElementById('resend-error_msg').innerHTML = "";
						   document.getElementById('login-error_msg').innerHTML = "Sorry!! Account Doesn't Exist";
					   }
					    else if(res == 3)
					   {
						   document.getElementById('resend-error_msg').innerHTML = "";
						   document.getElementById('login-error_msg').innerHTML = "Your Account is already confirmed please enter password";
					   }
					    else if(res == 4)
					   {
						   document.getElementById('resend-error_msg').innerHTML = "";
						   document.getElementById('login-error_msg').innerHTML = "An email is sent to your email id Please check";
					   }
					  
					   
					   else{
						   alert("error");
				
						   
						   
						   }
				   },
				  
		
		});
	
	}
	
	 });	 
	 
	 
	 
	 
$("#contact").click(function(){
	
	var email=$("input[name=email]").val();
	var name=$("input[name=name]").val();
	var msg=$("#msg").val();
	if((email.length == 0 || email == "" || email == null) && (name.length == 0 || name == "" || name == null) && (msg.length == 0 || msg == "" || msg == null) )
	{
		 document.getElementById('contact-error_msg').innerHTML = "Please fill these fields";
		 
	}
	else if(name.length == 0 || name == "" || name == null)
	{
		document.getElementById('contact-error_msg').innerHTML = "Please enter Name";
	}
	else if(!(/^[a-zA-Z ]{2,30}$/.test($('input[name=name]').val())))
	{
		document.getElementById('contact-error_msg').innerHTML = "Please enter valid Name";
	}
	else if(email.length == 0 || email == "" || email == null)
	{

		document.getElementById('contact-error_msg').innerHTML = "Please enter Email-ID";
	}
	else if(!(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test($('input[name=email]').val())))
	{
		document.getElementById('contact-error_msg').innerHTML = "Please enter valid Email-ID";
	}
	else if(msg.length == 0 || msg == "" || msg == null)
	{
		document.getElementById('contact-error_msg').innerHTML = "Please enter message";
	}
	else if(msg.length > 1000)
	{
		document.getElementById('contact-error_msg').innerHTML = "Message should be less than 1000 letters";
	}
	
	else
	{
		document.getElementById('contact-error_msg').innerHTML = "";
		$.ajax({
		
		       type:"POST",
			   url:http_root +"lib/contact.php",
			   data:{name:name,email:email,msg:msg},
			   async:false,
			   success: function(res){
				   
				   if(res == 0){
					   
					   document.getElementById('contact-error_msg').innerHTML = "Please fill these fields";	
					   
					
					   
					   }
					   else if(res == 1)
					   {
						   document.getElementById('contact-error_msg').innerHTML = "Please enter valid email id";
					   }
					   else if(res == 2)
					   {
						   document.getElementById('resend-error_msg').innerHTML = "Message should be less than 1000 letters";
						  
					   }
					    else if(res == 3)
					   {
						   $(".wrapper .contact-section .block1").find("input[type=text],input[type=email],textarea").val("");
						   document.getElementById('contact-error_msg').innerHTML = "Thanks for contacting us.";
					   }
					    
					  
					   
					   else{
						   alert("error");
				
						   
						   
						   }
				   },
				  
		
		});
	
	}
	
	 });	 	 
	
})