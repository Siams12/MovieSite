<html>
<head><title> Home </head></title>
<body>
<h1> Home page </h1>
<?php
include 'Pdo.php';
session_start();
var_dump($_SESSION);
if (isset($_SESSION ['userName'])){
	?>
<a href="http://localhost/MovieSite/Logout.php">Logout</a>
<?php
if (($_SESSION ['admin'])){
	?>
	<a href="http://localhost/MovieSite/Admin_Page.php">Admin_Page</a>
	<?php
}
}
else{
	?>
<a href="http://localhost/MovieSite/Registration.php">Register</a>
<a href="http://localhost/MovieSite/Login.php">Login</a>
<?php
}
?>

<body>
<html>