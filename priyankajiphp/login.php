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
$sql="SELECT * from sanjayjain WHERE username='$a1' AND password='$a2'";	
	$d = $c->query($sql);	
	$row = $d->fetch_assoc();
	if(($row['username']==$a1) && $row['password']==$a2)
	{
		echo "login sucessfully<br>";
		echo $row['username']."<br>";
		echo $row['password']."<br>";
		echo $row['phone']."<br>";
	}
	else
	{
		header('Location:login1.html');
	}
}
?>