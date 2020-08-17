<?php
session_start();
if($_SESSION['user'] && $_SESSION['pass'])
{
$aa=$_SESSION['user'];
$aa1=$_SESSION['pass'];
	echo $aa."<br>";
	echo $aa1."<br>";
	echo "<a href='logout.php'>logout</a>";
}
else
{
	header('Location:login.html');
}
?>
