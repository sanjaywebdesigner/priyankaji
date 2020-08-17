<?php
session_start();
if($_SESSION['user'] && $_SESSION['pass'])
{
$aa=$_SESSION['user'];
$aa1=$_SESSION['pass'];
	echo $aa."<br>";
	echo $aa1."<br>";
	echo "<a href='page1.php'>page1.php</a>";
	echo "<a href='page2.php'>page2.php</a>";
	echo "<a href='page3.php'>page3.php</a>";
	echo "<a href='logout.php'>logout</a>";
	
	/* $sql="SELECT * from sanjayjain WHERE username='$aa' and password='$aa1'";
	
	*/
}
else
{
	header('Location:login.html');
}
?>
