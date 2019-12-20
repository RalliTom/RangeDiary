<?php
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
	
	$eid = filter_input(INPUT_POST, 'rowid2');
	//deleting data from results table
	$sql= "DELETE FROM results WHERE eventid='$eid'";
if ($con->query($sql)){
$message = "Event deleted";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;url=RangeResult.php'>";
}
else{
echo "Error deleting: ". $sql ."
". $con->error;
}

$con->close();    
}
?>