
$(document).ready(function()
{

$('#userid').blur(function(){
	var isPresent = /./;
	if (!isPresent.test($('#userid').val()))
	{alert("fill in userid!")
	$('#userid').css("border-color","red");
	
	}
}); 


$('#fname').blur(function(){
	var Fname = /^[A-Z]/;
	if (!Fname.test($('#fname').val()))
	{alert("Capitalize first letter")
	$('#fname').css("border-color","red");
	}
});

$('#lname').blur(function(){
	var lname = /^[A-Z]/;
	if (!lname.test($('#lname').val()))
	{alert("Capitalize first letter")
	$('#lname').css("border-color","red");
	}
});


$('#email').blur(function(){
	var Fname = /./;
	if (!Fname.test($('#email').val()))
	{alert("fill in email")
	$('#email').css("border-color","red");
	}
});

$('#email').blur(function(){
	var email = /^[A-z]{1,30}(@)[A-z]{1,30}(.)[a-z]{3}$/;
	if (!email.test($('#email').val()))
	{alert("asdf@asdf.abc format please")
	$('#email').css("border-color","red");
	}
});

$('#phone').blur(function(){
	var email = /./;
	if (!email.test($('#phone').val()))
	{alert("fill in phone field")
	$('#phone').css("border-color","red");
	}
});

$('#phone').blur(function(){
	var email = /^[0-9]{3}(-)[0-9]{3}(-)[0-9]{4}$/;
	if (!email.test($('#phone').val()))
	{alert("123-123-1234 format")
	$('#phone').css("border-color","red");
	}
});

$('#street').blur(function(){
	var email = /./;
	if (!email.test($('#street').val()))
	{alert("fill in data here")
	$('#street').css("border-color","red");
	}
});


$('#city').blur(function(){
	var email = /./;
	if (!email.test($('#City').val()))
	{alert("fill in data here")
	$('#City').css("border-color","red");
	}
});

$('#city').blur(function(){
	var lname = /^[A-Z]/;
	if (!lname.test($('#city').val()))
	{alert("Capitalize first letter")
	$('#city').css("border-color","red");
	}
});


$('#state').blur(function(){
	var email = /./;
	if (!email.test($('#state').val()))
	{alert("fill in data here")
	$('#state').css("border-color","red");
	}
});

$('#state').blur(function(){
	var email = /^[A-Z]{2}$/;
	if (!email.test($('#state').val()))
	{alert("2 characters both capitlized please")
	$('#state').css("border-color","red");
	}
});

$('#zip').blur(function(){
	var email = /./;
	if (!email.test($('#zip').val()))
	{alert("fill in data here")
	$('#zip').css("border-color","red");
	}
});



$('#zip').blur(function(){
	var email = /^[0-9]{1,6}$/;
	if (!email.test($('#zip').val()))
	{alert(" up to 6 digits")
	$('#zip').css("border-color","red");
	}
});


$('#date').blur(function(){
	var email = /./;
	if (!email.test($('#date').val()))
	{alert("fill in data here")
	$('#date').css("border-color","red");
	}
});


$('#date').blur(function(){
	var email = /^[0-9]{2}(\/)[0-9]{2}(\/)[0-9]{4}$/;
	if (!email.test($('#date').val()))
	{alert("must be 10/13/1992")
	$('#date').css("border-color","red");
	}
});












}


);
