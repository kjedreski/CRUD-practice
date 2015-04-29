



<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>Add User <!-- need Id of page-title--></title>
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	</head>

	<?php
$mysqli = new mysqli("db1.cs.uakron.edu","kaj61","oic4ew5H");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


$query = "select * from ISP_kaj61.User_Demographic, ISP_kaj61.User_personal
WHERE User_personal.Userid = User_Demographic.Userid";
// select * users and displasy to html   
//execute query #1

// TODO GOOGLE: :::: get url parameters using jquery
// nah just use regex

$result = $mysqli->query($query);
//if ($result->num_rows>1) echo "less then 1";
	echo "<table>";
	echo "<TR><TD>UserId</TD><TD>First name</TD><TD>last name</TD><TD>sex</TD><TD>Street</TD><TD>City</TD><TD>State</TD><TD>zip</TD><TD>date</TD><TD>Email</TD><TD>phone</TD><TD>edit</TD</TR>";
	while ($row = $result->fetch_assoc())
{  

	echo "<tr><td>";
	echo $row['UserId']; 
	echo "</td><td>";
	echo $row['fname'];
	echo "</td><td>";
	echo $row['lname'];
	echo "</td><td>";
	echo $row['sex'];
	echo "</td><td>";
	echo $row['Street'];
	echo "</td><td>";
	echo $row['City'];
	echo "</td><td>";
	echo $row['State'];
	echo "</td><td>";
	echo $row['zip'];
	echo "</td><td>";
	echo $row['Date'];
	echo "</td><td>";
	echo $row['Email'];
	echo "</td><td>";
	echo $row['phone']; 
	echo "</td><td>";
	echo "<a href="."Add_Edit.php?mode=editU&id=".$row['UserId'].".>edit</a>";
	echo"</td></tr>";

}

	echo "</table>"; 

//else echo"no records";
// php $_get after button
/*NOTE******************** submit post is successfully posting vars in url.
using GET would hide them because they were already there

 */
 
$mysqli->close();
?>

	
	
	


<body class="mainBG" >

<!-- dsd Display all users buttdon-->






<button id="new-user" >Add New User
</button>

<br>
<p><h3> ATTENTION: I could not get my header() function in php to work, but the crud functionality
	Will work. You may get a server error, while
	testing delete, but it will delete. same with add.
	</h3>




<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="ShowHide.js"></script>


</html>