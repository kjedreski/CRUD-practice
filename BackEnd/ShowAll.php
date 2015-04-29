<?php
$mysqli = new mysqli("db1.cs.uakron.edu","kaj61","oic4ew5H");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// our sample test querys
//$query = "SELECT * FROM ISP_kaj61.User_Demographic";ss


//submit data to servera
if (isset($_POST['add'])) {

$query = "";

// select * users and display to html   
//execute query #1
$mysqli->query($query);



}




// making sure the page loads w/o syntax errors
echo "no syntax errors";








 
 
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
