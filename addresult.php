<?php
//variables filtering
$weapon = filter_input(INPUT_POST, 'weapon');
$usedTime = filter_input(INPUT_POST, 'usedTime');
$range = filter_input(INPUT_POST, 'range');
$roundsUsed = filter_input(INPUT_POST, 'roundsUsed');
$results = filter_input(INPUT_POST, 'results');
$target = filter_input(INPUT_POST, 'target');

//input vadilation
if (!empty($weapon)){
if (!empty($usedTime)){
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
	//insertion of data to results table
$sql = "INSERT INTO results (weapon, timeused, rangedata, rounds, results, targets)
values ('$weapon','$usedTime','$range','$roundsUsed','$results','$target')";
if ($con->query($sql)){
$message = "Data saved";
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