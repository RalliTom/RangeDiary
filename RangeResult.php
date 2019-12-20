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
	<script>
		function GetSelectedValue(){
			var e = document.getElementById("forview");
			var result = e.options[e.selectedIndex].value;
			
			document.getElementById("place").innerHTML = 'Arvo1';
		}
	</script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>

<body>
    <header> 
        <h1>Range Diary</h1>
    </header>
	<div class="Event">
        <h1>Session info</h1>
		<form action="" method="post">
			<?php include('getresult.php') ?>
			
			<button type="button" onclick="GetSelectedValue()">Get Selected</button>
			<br><br>
			
			<br><br>
		 
		 </form>
	</div>
    <div class="Results">
        <h1>Results</h1>
        <form action="update.php" method="post">
            <label for="place">
                <i class="fas fa-map"></i>
            </label>
            <input type="text" name="place" placeholder="Place" id="place" value='<?php echo $place[0]; ?>' required>
            <label for="dates">
                <i class="fas fa-calendar"></i>
            </label>
            <input type="text" name="dates" placeholder="Date YYYY-MM-DD" id="dates" value='<?php echo $date[0]; ?>' required>
			<input type="text" name="rowid" placeholder="rowid" id="rowid" value='<?php echo $eventid[0]; ?>' hidden>
		
		<br><br>
			 
			<label for="weapon">
                <i class="fas fa-check"></i>
            </label>
            <input type="text" name="weapon" placeholder="Weapon" id="weapon" value='<?php echo $weapon[0]; ?>' required>
            <label for="usedTime">
                <i class="fas fa-hourglass"></i>
            </label>
            <input type="text" name="usedTime" placeholder="Used Time" id="usedTime" value='<?php echo $usedTime[0]; ?>'>
			<label for="range">
                <i class="fas fa-arrows"></i>
            </label>
            <input type="text" name="range" placeholder="Range" id="range" value='<?php echo $range[0]; ?>'>
			<label for="target">
                <i class="fas fa-rocket"></i>
            </label>
            <input type="text" name="target" placeholder="Target" id="target" value='<?php echo $target[0]; ?>'>
            <label for="roundsUsed">
                <i class="fas fa-plus"></i>
            </label>
            <input type="text" name="roundsUsed" placeholder="Used Rounds" id="roundsUsed" value='<?php echo $roundsUsed[0]; ?>'>
			<label for="results">
                <i class="fas fa-thumbs-up"></i>
            </label>
            <input type="text" name="results" placeholder="Results" id="results" value='<?php echo $eresult[0]; ?>'>
			<br><br>
            <input style="margin-top:0px;" type="submit" value="Save Result">
			
			<br><br>
        </form>
		<form action="delete.php" method="post">
			<input type="text" name="rowid2" placeholder="rowid2" id="rowid2" value='<?php echo $eventid[0]; ?>' hidden>
			<input style="margin-top:0px;" type="submit" value="Delete Result">
			<br><br>
        </form>
    </div>

	<div class="page-footer">
        <a href="welcome.php".php" class="btn btn-warning">Main page</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </div>
</body>


</html>