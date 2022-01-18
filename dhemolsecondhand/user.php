<?php
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}

$username=$_SESSION["username"];
$password=$_SESSION["password"];

?>
<!DOCTYPE html>
<html>
<head>
 <!-- Load file CSS Bootstrap offline -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="jumbotron text-center">
    <p>Username : <?php echo $username; ?></p>
    <p>Password : <?php echo $password; ?></p>
    <a href="logout.php" class="btn btn-warning" role="button">Logout</a>
</div>

</body>
</html> 