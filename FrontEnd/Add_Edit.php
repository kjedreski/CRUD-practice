<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<title>Add User <!-- need Id of page-title--></title>
	</head>



<body class="mainBG" >


<!--Check to see which button clicked and show the proper form, hide the other -->

<a href="User_List.php">User List</a>



<br>
<div id="addForm">
<h2>Add User</h2>
<form action="../BackEnd/add.php" method="POST" >
UserId <input type="text" name = "userid" id="userid" > <br>
First Name<input type="text" name="fname" id="fname"> <br>
Last Name<input type="text" name="lname" id="lname"> <br>
Email<input type="text" name="email" id="email"> <br>
Phone<input type="text" name="phone" id="phone"> <br>
Street<input type="text" name="street" id="street"> <br>
City<input type="text" name="city" id="city"> <br>
State<input type="text" name="state" id="state"> <br>
Zip<input type="text" name="zip" id="zip"> <br>
Today's Date<input type="text" name="add-date" id="date"> <br>
<!-- TODO: add div around radio-->
Male <input type="radio" name="sex" value="Male"> <br>
Female <input type="radio" name="sex" value="Female"> <br>
<input type="submit" value="Add" name="add" > 
<input type="reset"> 
</form>
</div>

<?php echo $_POST["id"]; ?>
<!--TODO:
use aJAX on userId to populate remaining fields
query_parts = parse_str($url_parts['query']);
$url = window.location.href;
 $query = $url[query]; 
 parse_str($query);
 echo "$x &y $z";
 -->
<div id="editForm">
<h2>Edit User</h2>
<form action="../BackEnd/edit.php" method="POST">
UserId <input type="text" name = "userid" id="euserid"  readonly> <br>
First Name<input type="text" name="fname" id="efname" value="" > <br>
Last Name<input type="text" name="lname" id="elname"> <br>
Email<input type="text" name="email" id="eemail"> <br>
Phone<input type="text" name="phone" id="ephone"> <br>
Street<input type="text" name="street" id="estreet"> <br>
City<input type="text" name="city" id="ecity"> <br>
State<input type="text" name="state" id="estate"> <br>
Zip<input type="text" name="zip" id="ezip"> <br>
Today's Date<input type="text" name="add-date" id="edate"> <br>
<!-- TODO: add div around radio-->
Male <input type="radio" name="msex" value="Male"> <br>
Female <input type="radio" name="fsex" value="Female"> <br>
<!--TODO: add delete functionality and debug update -->
<input id="delete-user" type="submit" value="Delete User" id="delete-user" name="delete">
<input type="submit" value="Update" name="update" > 
<input type="reset"> 
</form>
</div>







<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="ShowHide.js"></script>
<script src="aJax.js"></script>
<script src="Validation.js"></script>



</body>



</html>