function signemail(input,error_msg)
{
	var email = input.value;
	var regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	if(email.length == 0 || email == "" || email == null)
	{
		$('.wrapper .login-section-three .register input.semail').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please enter Email-ID";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please enter Email-ID";
		}

	}
	else if(!regex.test(email))
	{
		$('.wrapper .login-section-three .register input.semail').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please enter valid Email-ID";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please enter valid Email-ID";
		}
	}
	else
	{
		$('.wrapper .login-section-three .register input.semail').css("border-color", "#000");
		error_msg.innerHTML="";
	}
}


function signpass(input,error_msg)
{
	var pass = input.value;
	if(pass.length == 0 || pass == "" || pass == null)
	{
		$('.wrapper .login-section-three .register input.spass').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please enter Password";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please enter Password";
		}

	}
	else if(pass.length < 9)
	{
		$('.wrapper .login-section-three .register input.spass').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Password must be greater than 8 letters";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Password must be greater than 8 letters";
		}
	}
	else
	{
		$('.wrapper .login-section-three .register input.spass').css("border-color", "#000");
		error_msg.innerHTML="";
	}
}


function signcpass(input,error_msg)
{
	var cpass = input.value;
	var pass = document.getElementById('opass').value;
	if(cpass.length == 0 || cpass == "" || cpass == null)
	{
		$('.wrapper .login-section-three .register input.srpass').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please re-enter Password";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please re-enter Password";
		}

	}
	else if(cpass != pass)
	{
		$('.wrapper .login-section-three .register input.srpass').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Password is not match";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Password is not match";
		}
	}
	else
	{
		$('.wrapper .login-section-three .register input.srpass').css("border-color", "#000");
		error_msg.innerHTML="";
	}
}


function scity(input,error_msg)
{
	var cate = input.value;
	if(cate.length == 0 || cate == "" || cate == null)
	{
		$('.wrapper .login-section-three .register .scity').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please select a City";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please select a City";
		}

	}
	else
	{
		$('.wrapper .login-section-three .register .scity').css("border-color", "#000");
		error_msg.innerHTML="";
	}
}


function signname(input,error_msg)
{
	var fname = input.value;
	var regex = /^[a-zA-Z ]{2,30}$/;
	if(fname.length == 0 || fname == "" || fname == null)
	{
		$('.wrapper .login-section-three .register input.sname').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please enter Name";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please enter Name";
		}

	}
	else if(!regex.test(fname))
	{
		$('.wrapper .login-section-three .register input.sname').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please enter valid Name";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please enter valid Name";
		}
	}
	else
	{
		$('.wrapper .login-section-three .register input.sname').css("border-color", "#000");
		error_msg.innerHTML="";
	}
}

function signage(input,error_msg)
{
	var age = input.value;
	if(age.length == 0 || age == "" || age == null)
	{
		$('.wrapper .login-section-three .register input.sage').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please enter your Date of Birth";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please enter your Date of Birth";
		}

	}
	
	else
	{
		$('.wrapper .login-section-three .register input.sage').css("border-color", "#000");
		error_msg.innerHTML="";
	}
}

function sgroup(input,error_msg)
{
	var group = input.value;
	if(group.length == 0 || group == "" || group == null)
	{
		$('.wrapper .login-section-three .register .sgroup').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please select a Blood Group";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please select a Blood Group";
		}

	}
	else
	{
		$('.wrapper .login-section-three .register .sgroup').css("border-color", "#000");
		error_msg.innerHTML="";
	}
}


function stel(input,error_msg)
{
	var tel = input.value;
	var tregex = /^[0-9]*$/;
	if(tel.length == 0 || tel == "" || tel == null)
	{
		$('.wrapper .login-section-three .register input.stel').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please enter your Contact number";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please enter your Contact number";
		}

	}
	else if(tel.length != 10 || !tregex.test(tel))
	{
		$('.wrapper .login-section-three .register input.stel').css("border-color", "#FF4343");
		if(error_msg == null)
		{
			error_msg.innerHTML="Please enter valid Contact number";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please enter valid Contact number";
		}
	}
	else
	{
		$('.wrapper .login-section-three .register input.stel').css("border-color", "#000");
		error_msg.innerHTML="";
	}
}


function sgender(error_msg)
{
    var genderM=document.getElementById('male');
    var genderF=document.getElementById('female');

    if(genderM.checked==false && genderF.checked==false ) {
        if(error_msg == null)
		{
			error_msg.innerHTML="Please select Gender";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please select Gender";
		}
        
    }  
	else
	{
		error_msg.innerHTML="";
		
	}
}


function sques(error_msg)
{
    var quesy=document.getElementById('yes');
    var quesn=document.getElementById('no');

    if(quesy.checked==false && quesn.checked==false ) {
        if(error_msg == null)
		{
			error_msg.innerHTML="Please select Yes or No";
		}
		else
		{
			error_msg.innerHTML="";
			error_msg.innerHTML="Please select Yes or No";
		}
        
    }  
	else
	{
		error_msg.innerHTML="";
		
	}
}

function limitText(limitField, limitCount) {
	if (limitField.value.length > 1000) {
		limitField.value = limitField.value.substring(0, 1000);
	} else {
		limitCount.value = 1000 - limitField.value.length;
	}
}

