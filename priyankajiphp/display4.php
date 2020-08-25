<?php 
session_start();
if(!isset($_SESSION['uid'])){
	 header('location:login.php');
	}
	echo "Welcome ".$_SESSION['uid'];
	echo "<img src='upload/".$_SESSION['pic']."'>";
	?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<a href="Logout.php">Logout</a>
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
$sql = "SELECT* FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border=1><tr><th>ID</th><th>Username</th><th>Password</th><th>Emailid</th><th>Date of Birth</th><th>Gender</th><th>Hobbies</th><th>Image</th><th>Country</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["uid"]."</td><td>".$row["username"]."</td><td>".$row["password"]."</td><td>".$row["emailid"]."</td><td>".$row["dob"]."</td><td>".$row["gender"]."</td><td>".$row["hobbies"]."</td><td><img src='upload/".$row["image"]."' width='100px'></td><td>".$row["country"]."</td>";
		?>
		 <td><a href="display5.php?id=<?=$row["uid"]?>">View</a></td>
		<?php
		echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>
</body>
</html>