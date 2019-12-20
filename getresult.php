<?php
//session_start();
//variables filtering
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
	//$result = mysql_query("SELECT * FROM your_table");
	$result = mysqli_query($con, $sql);
	echo "<select id='forview'>";
while ($row = mysqli_fetch_array($result)) {
	echo "<option value='" . $row['eventid'] . "'> " . $row['date'] . " " . $row['place'] . "</option>";
  //  echo   $row['date'] . " " . $row['place'] . " " . $row['results'] . "<br>";
}
echo "</select>";
//$message = "Data loaded";
//echo "<script type='text/javascript'>alert('$message');</script>";
//echo "<meta http-equiv='refresh' content='0;url=RangeDiary.php'>";
}
else{
echo "Error: ". $sql ."
". $con->error;
}
$con->close();
}

?>