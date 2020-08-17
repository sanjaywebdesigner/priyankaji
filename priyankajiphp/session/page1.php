<?php
session_start();
if($_SESSION['user'] && $_SESSION['pass'])
{
$aa=$_SESSION['user'];
$aa1=$_SESSION['pass'];
	$aa2=$_SESSION['mobile'];
	echo "my name is".$aa."<br>";
	echo "my phon is".$aa2;
	echo "<a href='profile.php'>profile.php</a>";
	echo "<a href='page1.php'>page1.php</a>";
	echo "<a href='page2.php'>page2.php</a>";
	echo "<a href='page3.php'>page3.php</a>";
	echo "<a href='logout.php'>logout</a>";
}
else
{
	header('Location:login.html');
}
?>
