/* jquery to 
show or hide forms

*/

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}


$(document).ready(function(){

	 
	


// first hide both forms
// tried cookies, localstorage
//do we use a form submit button or a regular button tag with jquery?
// Nope, using regex now. isntead of hashes

// action when clicked 
	$("#new-user").click(function (){
	window.location.href="Add_Edit.php?mode=newU&id=";
});

	$("#edit-user").click(function () {
	window.location.href="Add_Edit.php?mode=editU&id=";
	});
	
	//regex test for edit Mode
	var editMode = /(editU)/;
	if (editMode.test(window.location.href)){
	document.title = 'Edit User';
	$("#addForm").hide();
	$("#editForm").show();
	//regex for auto-populating userid
	var url = window.location.href;
	var id = url.match(/[^id=]*$/);
    //id = id.match(/\d/); trying to regex again, but must be in string form first
	//console.log($.type(id));
	

	$('#euserid').val(id);
	
	}
	//test for add Mode
	var addMode = /(newU)/;
	if (addMode.test(window.location.href)){
		document.title = 'Add User';
	$("#editForm").hide();
	$("#addForm").show();
	}
	
	
	

	

	
	
	});
	
	
	
	
	







