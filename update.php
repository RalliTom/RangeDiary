<?php
session_start();
//variables filtering
$place = filter_input(INPUT_POST, 'place');
$date = date(filter_input(INPUT_POST, 'dates'));
$eresult = filter_input(INPUT_POST, 'eResult');
$weapon = filter_input(INPUT_POST, 'weapon');
$usedTime = filter_input(INPUT_POST, 'usedTime');
$range = filter_input(INPUT_POST, 'range');
$roundsUsed = filter_input(INPUT_POST, 'roundsUsed');
$target = filter_input(INPUT_POST, 'target');
$eid = filter_input(INPUT_POST, 'rowid');
$sid = $_SESSION['id'];

//input vadilation
if (!empty($place)){
if (!empty($date)){
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
	//updating  data at results table
	//$newdate = date_format($date,"Y-m-d");
	
	$sql = "update results set place='$place', date='$date', results='$eresult', weapon='$weapon', timeused='$usedTime', rangedata='$range', targets='$target', rounds='$roundsUsed'
	 where eventid  = '$eid'";
if ($con->query($sql)){
$message = "Update saved";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;url=RangeResults.php'>";
}
else{
echo "Error: ". $sql ."
". $con->error;
}
$con->close();
}
}
else{
echo "Add place";
die();
}
}
else{
echo "Add date";
die();
}
?>