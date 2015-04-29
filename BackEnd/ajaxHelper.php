<?php
$mysqli = new mysqli("db1.cs.uakron.edu","kaj61","oic4ew5H");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

/*
this part is returning variables from server using ajax
*/
if (isset($_POST['uID'])){
// chop off period. using trim function
$uId = $_POST['uID'];
$uId = trim($uId,".");




$query="SELECT * FROM ISP_kaj61.User_Demographic a,
					  ISP_kaj61.User_personal b
WHERE a.UserID = '$uId' AND
b.Userid = '$uId'
";

header("Content-Type: application/json");
if ($result = $mysqli->query($query)) {
    // fetch associative array
		$rows = array();
	while ($row = $result->fetch_assoc()) {
		$rows[] = $row;
	}
	print json_encode($rows);
	
	
/*
    while ($row = $result->fetch_assoc()) {
       json_encode(printf("%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s\n", 
	   $row["UserId"] , $row["fname"] , $row["lname"] , 
	   $row["Email"] ,
	$row["phone"] , 
	$row["Street"],
	$row["City"] ,
	$row["State"] ,
	$row["zip"] ,
	$row["date_added"] ,
	$row["sex"]
	));
    } */
	
	
    //free result set 
    $result->free();
}




}



// making sure the page loads w/o syntax errors








 
 //close connection 
$mysqli->close();


?>


















