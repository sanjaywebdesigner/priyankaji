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
if(isset($_POST['pnumber']))
{
$a1=$_POST['name'];
$a2=$_POST['pass'];
	
	
	$sql="SELECT * from sanjayjain WHERE username='$a1' AND password='$a2'";	
	$d = $c->query($sql);	
	$row = $d->fetch_assoc();
	if(($row['username']==$a1) && $row['password']==$a2)
	{
		
		$b1=$row['phone'];
		
		
		if($_POST['phone']!="")
	{
$a3=$_POST['phone'];
	}
		else
		{
			$a3=$b1;
		}
	
		
		$sql1 = "UPDATE sanjayjain SET phone='$a3' WHERE username='$a1' AND password='$a2'";	
	$d1 = $c->query($sql1);	
	
	}
	
	
	
}
	else if(isset($_POST['pgender']))
{
$a1=$_POST['name'];
$a2=$_POST['pass'];
	
	
	$sql="SELECT * from sanjayjain WHERE username='$a1' AND password='$a2'";	
	$d = $c->query($sql);	
	$row = $d->fetch_assoc();
	if(($row['username']==$a1) && $row['password']==$a2)
	{
		
		
		$b2=$row['gender'];
		
	
	if($_POST['gender']!="")
	{
$a4=$_POST['gender'];
	}
	else{
		$a4=$b2;
	}
		
		$sql1 = "UPDATE sanjayjain SET gender='$a4' WHERE username='$a1' AND password='$a2'";	
	$d1 = $c->query($sql1);	
	
	}
	
	
	
}

}
?>