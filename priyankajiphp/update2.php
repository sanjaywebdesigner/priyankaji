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
		
		$b1=$row['photo'];
		
		
		$sanjay  = basename($_FILES['deepak']['name']);
		if($sanjay=="")
		{
			$sanjay=$b1;
		}
		else
		{
		move_uploaded_file($_FILES['deepak']['tmp_name'], "uploads/$sanjay");
	$d1="UPDATE sanjayjain SET photo='$sanjay' WHERE username='$a1' AND password='$a2'";
		
	$c->query($d1);
		}
	
		
		
		
		
	
	}
	
	
	
	

}
?>