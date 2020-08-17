<?php
$aa1="localhost";/*  host  */
$aa2="priyankajiphp";/*  username database  */
$aa3="123";/*  password database  */
$aa4="priyankajiphp";/*  database  */
$c=new mysqli($aa1,$aa2,$aa3,$aa4);
if($c->connect_error)
{
	echo "connection failed";
}
else
{
$a1=$_POST['name'];
$a2=$_POST['pass'];
$a3=$_POST['mobile'];
	$d="INSERT into sanjayjain(username,password,phone) values('$a1','$a2','$a3')";
	$c->query($d);
	header('Location:login.html');
}
?>