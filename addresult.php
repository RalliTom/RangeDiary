<?php
session_start();
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
$sql = "select * from results where useid  = '$sid' ";
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

?>