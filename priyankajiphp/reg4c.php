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
		
		$aa=$_POST['date'];
		$aa1=$_POST['month'];
		$aa2=$_POST['year'];
		$a6=$aa." - ".$aa1." - ".$aa2;
		/*echo $a5;*/
		
		$sanjay  = basename($_FILES['deepak']['name']);
$fileType = pathinfo($sanjay,PATHINFO_EXTENSION);
	if($fileType == "jpg" || $fileType == "png" || $fileType == "jpeg"
) { 
	
		if(move_uploaded_file($_FILES['deepak']['tmp_name'], "uploads/$sanjay")){
	$d="INSERT into sanjayjain(username,password,phone,gender,hobbies,dob,photo) values('$a1','$a2','$a3','$a4','$a5','$a6','$sanjay')";
	$c->query($d);
	}
		else
		{
			echo "file not uploaded";
		}
	}
		else
		{
		echo "file should be jpeg,png";	
		}
	}
	else
	{
	echo "username can not be blank";		
	}

}
?>