<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpfull";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name=$_POST['username'];
$passward=$_POST['password'];
$emailid=$_POST['emailid'];
$gender=isset($_POST['gender'])?$_POST['gender']:''; // conditional operatotrd
$date=date("Y-m-d",strtotime($_POST['date']));
$hobbies=isset($_POST['hobbies'])?implode(",",$_POST['hobbies']):'';
$country=isset($_POST['country'])?implode(",",$_POST['country']):'';
$img_name = "";
// str photo upload

if(isset($_FILES['file']) and $_FILES['file']['name']!=""){
	$type = basename($_FILES['file']['type']);
            $img_name  = date("ymdhis").$_FILES['file']['name'];
                 if(move_uploaded_file($_FILES['file']['tmp_name'], "upload/$img_name")){
                     echo "<script>alert('file uploaded successfully')</script>";
					
                 }else{
                       echo "<script>alert('Error in file uploadeding')</script>";
                 }  
	}
   
					 //insert
					 $sql = "update registration set `username`='$name', `password`='$passward', `emailid`='$emailid', `dob`='$date', `gender`='$gender',    `hobbies`='$hobbies', `country`='$country'";
					 if($img_name!=""){
						  $sql.=", image='$img_name'";
						 }
						$sql.=" where uid=".$_REQUEST['uid'];
						if ($conn->query($sql) === TRUE) {
							echo "New record created successfully";
						} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
						}
?>

</body>
</html>