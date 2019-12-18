<?php
//variables filtering
$place = filter_input(INPUT_POST, 'place');
$date = date(filter_input(INPUT_POST, 'dates'));
$eresult = filter_input(INPUT_POST, 'eResult');
$sid =  trim($_SESSION["id"]);
$ssid = intval($sid);
//input vadilation
if (!empty($place)){
if (!empty($date)){
	$DATABASE_HOST = "localhost:3306";
	$DATABASE_USER = "root";
	$DATABASE_PASS = "";
	$DATABASE_NAME = "range_diary";     
 
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
	//insertion of data to eventid table
	//$newdate = date_format($date,"Y-m-d");
	
	$sql = "INSERT INTO eventid (place, date, result, usernbr)
	values ('$place','$date','$eresult',$ssid)";
if ($con->query($sql)){
$message = "Event saved";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<meta http-equiv='refresh' content='0;url=RangeDiary.php'>";
}
else{
echo "Error: ". $sql ."
". $con->error;
}
$con->close();
}
}
else{
echo "Write your name";
die();
}
}
else{
echo "Add feedback";
die();
}
?>