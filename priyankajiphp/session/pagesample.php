<?php
session_start();
if($_SESSION['user'] && $_SESSION['pass'])
{
	include "header.php";
	include "menu.php";
	include "content.php";
	include "footer.php";
}
else
{
	header('Location:login.html');
}
?>
