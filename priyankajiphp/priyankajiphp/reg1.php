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
	if(isset($_POST['name']) && $_POST['name']!="")
	{
$a1=$_POST['name'];
		if(isset($_POST['pass']))
		{
		$a2=$_POST['pass'];
		}
		else
		{
			$a2="";
		}
		if(isset($_POST['mobile']))
		{
$a3=$_POST['mobile'];
		}
		else
		{
			$a3="";
		}
if(isset($_POST['sanjay']))
		{
$a4=$_POST['sanjay'];
		}
		else
		{
			$a4="";
		}
$a5=implode(",",$_POST['ss']);
		$a6=$_POST['date1'];
		/*echo $a5;*/
	$d="INSERT into sanjayjain(username,password,phone,gender,hobbies,dob) values('$a1','$a2','$a3','$a4','$a5','$a6')";
	$c->query($d);
	}
	else
	{
	echo "username can not be blank";		
	}

}
?>