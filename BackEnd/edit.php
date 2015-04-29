<?php
$mysqli = new mysqli("db1.cs.uakron.edu","kaj61","oic4ew5H");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// our sample test querys
//$query = "SELECT * FROM ISP_kaj61.User_Demographic";ss




if (isset($_POST['delete'])){
$uId = trim($_POST['userid'],".");
$query = ("DELETE FROM ISP_kaj61.User_Demographic
		WHERE UserId = ".$uId."");
$mysqli->query($query);
header("../FrontEnd/User_List.php");
} 








//submit data to servera
if (isset($_POST['update'])) {
$user = $_POST['userid'];
$user = trim($user,".");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$date = $_POST['date-add'];
$sex = $_POST['sex'];


/*UPDATE USER INFO */
$query = "UPDATE ISP_kaj61.User_Demographic 
			SET Street='$street',
			 City='$city',
			 zip='$zip',
			date_added=$date,
			Email='$email',
			phone='$phone'
		WHERE UserId = '$user'
";
//execute query #1  
$mysqli->query($query);

$query = "UPDATE ISP_kaj61.User_personal 
			SET fname='$fname',
			lname = '$lname',
			sex = '$sex',
		WHERE Userid= '$user'
		 ";
//execute query #2
$mysqli->query($query);
		 
}




// making sure the page loads w/o syntax errors
echo "no syntax errors";


















//testing general output
/*
//testing output of sql
if ($result = $mysqli->query($query)) {
    /* fetch associative array 
    while ($row = $result->fetch_assoc()) {
       printf("%s,%s,%s,%s,%s,%s,%s\n", $row["UserId"] , $row["Street"] , $row["City"] , $row["State"] ,
	$row["zip"] , $row["date_added"],$row["sex"] );
    }

    free result set 
    $result->free();
}
*/
 
 
 
 //close connection 
$mysqli->close();


?>





























<?php
/*
// establish connectivity
$link = mysqli_connect("db1.cs.uakron.edu","kaj61","oic4ew5H") or
die("Error " . mysqli_connect_error($link));

//test some queries
$query = "SELECT * FROM ISP_kaj61.User_Demographic" or die("Error while
attempting to perform query" . mysqli_connect_error($link));
// execute query


$result = $mysqli->query($query);


//place results in a array
/*UserId,Street,City,State,zip,date_added,sex  */

/*
while ($row = $result->fetch_assoc()) {
echo "iterate";
printf("%s (%s)\n", $row["UserId"] , $row["Street"] , $row["City"] , $row["State"] ,
	$row["zip"] , $row["date_added"],$row["sex"] );
} */




//disable database connection
?>
