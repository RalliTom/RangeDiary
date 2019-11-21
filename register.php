<!DOCTYPE html>
<?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = "localhost:3308";
$DATABASE_USER = "root";
$DATABASE_PASS = "";
$DATABASE_NAME = "mysql";
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // If there is an error with the connection, stop the script and display the error.
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Range Diary</h1>
        <form action="RangeDiary.php" method="post">
            <input type="submit" value="Back to Login">
        </form>
    </header>

    <div class="login">
        <h1>Register</h1>
        <form action="authenticate.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <label for="email">
                <i class="far fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="E-mail" id="email" required>
            <input type="submit" value="Register">
        </form>
    </div>
</body>