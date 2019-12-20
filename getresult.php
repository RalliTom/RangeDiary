<?php
//session_start();
//variables filtering
$place =  array();
$date =  array();
$eresult =  array();
$weapon =  array();
$usedTime =  array();
$range =  array();
$roundsUsed =  array();
$target =  array();
$eventid =  array();
$sid = $_SESSION['id'];

	$DATABASE_HOST = "localhost:3306";
	$DATABASE_USER = "root";
	$DATABASE_PASS = "";
	$DATABASE_NAME = "rangediary";     
 
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
	//insertion of data to results table
$sql = "select * from results where userid  = '$sid' ";
if ($con->query($sql)){
	//Creating select-list from sql query
	$result = mysqli_query($con, $sql);
	echo "<select id='forview'>";
while ($row = mysqli_fetch_array($result)) {
	echo "<option value='" . $row['eventid'] . "'> " . $row['date'] . " " . $row['place'] . "</option>";
	//saving query data for html insertion
	$place[] = $row['place'];
	$date[] = $row['date'];
	$eresult[] = $row['results'];
	$weapon[] = $row['weapon'];
	$usedTime[] = $row['timeused'];
	$range[] = $row['rangedata'];
	$roundsUsed[] = $row['rounds'];
	$target[] = $row['target'];
	$eventid[] = $row['eventid'];
	
}
echo "</select>";

}
else{
echo "Error: ". $sql ."
". $con->error;
}
$con->close();
}

?>