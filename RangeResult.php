<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Results</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<body>
    <header> 
        <h1>Range Diary</h1>
    </header>

    <div class="Results">
        <h1>Results</h1>
        <form action="" method="post">
            <label for="place">
                <i class="fas fa-map"></i>
            </label>
            <input type="text" name="place" placeholder="Place" id="place" required>
            <label for="dates">
                <i class="fas fa-calendar"></i>
            </label>
            <input type="text" name="dates" placeholder="Date YYYY-MM-DD" id="dates" required>
			<label for="eResult">
                <i class="fas fa-bullseye"></i>
            </label>
            <input type="text" name="eResult" placeholder="Event Result" id="eResult">
            <input type="submit" value="Get Events">
        </form>
		
		<br><br>
        <form action="" method="post">
			<label for="weapon">
                <i class="fas fa-check"></i>
            </label>
            <input type="text" name="weapon" placeholder="Weapon" id="weapon" required>
            <label for="usedTime">
                <i class="fas fa-hourglass"></i>
            </label>
            <input type="text" name="usedTime" placeholder="Used Time" id="usedTime">
			<label for="range">
                <i class="fas fa-arrows"></i>
            </label>
            <input type="text" name="range" placeholder="Range" id="range">
			<label for="target">
                <i class="fas fa-rocket"></i>
            </label>
            <input type="text" name="target" placeholder="Target" id="target">
            <label for="roundsUsed">
                <i class="fas fa-plus"></i>
            </label>
            <input type="text" name="roundsUsed" placeholder="Used Rounds" id="roundsUsed">
			<label for="results">
                <i class="fas fa-thumbs-up"></i>
            </label>
            <input type="text" name="results" placeholder="Results" id="results">
            <input style="margin-top:0px;" type="submit" value="Add Result">
        </form>
    </div>
	<div class="Event">
        <h1>Session info</h1>
		<form action="SaveResult.php" method="post">
			<label for="placeSave">
                <i class="fas fa-map"></i>
            </label>
            <input type="text" name="placeSave" placeholder="Place" id="placeSave" required>
            <label for="datesSave">
                <i class="fas fa-calendar"></i>
            </label>
            <input type="text" name="datesSave" placeholder="Date" id="datesSave" required>
			<label for="eResultSave">
                <i class="fas fa-bullseye"></i>
            </label>
			
            <input type="text" name="eResultSave" placeholder="Event Result" id="eResultSave">
			<br><br>
			
			<br><br>
		 
		 </form>
	</div>
	<div class="page-footer">
        <a href="welcome.php".php" class="btn btn-warning">Main page</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </div>
</body>


</html>