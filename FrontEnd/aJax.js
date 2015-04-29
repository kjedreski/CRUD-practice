// include cdn up here




$(document).ready(function() {

var sendr = $("#euserid").val();
//console.log(sendr);
// sendr is string sent to php server.

if ($("#fname").val()=="" || $("fname").val()== undefined){
$.post("../BackEnd/ajaxHelper.php" , {uID: sendr} ,function( data ) {
	console.log(sendr);
	console.log("\n");
	console.log(data);
	console.log(data[0].UserId);
	console.log(data[0].fname);
	/*not working  */
	$("#euserid").val(data[0].UserId);
	$("#efname").val(data[0].fname);
	$("#elname").val(data[0].lname);
	$("#eemail").val(data[0].Email);
	$("#ephone").val(data[0].phone);
	$("#estreet").val(data[0].Street);
	$("#ecity").val(data[0].City);
	$("#estate").val(data[0].State);
	$("#ezip").val(data[0].zip);
	$("#edate").val(data[0].date_added);
	
	// checks if sex was male or female
	if (data[0].sex == "Male")
	$("input[name='msex']").click();
	if (data[0].sex == "Female")
	$("input[name='fsex']").click();
	
},"JSON");
}


});
