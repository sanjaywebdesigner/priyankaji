<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><?php
	session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpfull";
$rr=$_SESSION['uid'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT* FROM registration where username='$rr'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
		?>
<form action="updaterecords.php" method="post" enctype="multipart/form-data"><br>
<input type="hidden" name="uid" value="<?=$_REQUEST['id']?>">
<table width="600" border="1">
  <tbody>
    <tr>
      <td>username</td>
      <td>
	  <input type="text" name="username" value="<?php echo $row["username"];?>"></td>
    </tr>
    <tr>
      <td>password</td>
      <td><input type="text" name="password" value="<?php echo $row["password"];?>"></td>
    </tr>
    <tr>
      <td>emailid</td>
      <td><input type="text" name="emailid" value="<?php echo $row["emailid"];?>"></td>
    </tr>
    <tr>
      <td>Date of Birth</td>
      <td><input type="date" name="date" value="<?php echo $row["dob"];?>">
      </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="radio" name="gender" value="male" <?php echo $row["gender"]=="male"?'checked':'';?>> Male
      <input type="radio" name="gender" value="female" <?php echo $row["gender"]=="female"?'checked':'';?>>  Female
      </td>
    </tr>
    
       <tr>
         <td>Your photo</td>
         <td>
         <img src='upload/<?php echo $row["image"];?>' width="100px;">
         <input type="file" name="file"></td>
       </tr>
       <tr>
      <td>Hobbies</td>
      <td>
        <?php
		   $hob = array('singing','reading','cricket');
		   $shobs = explode(",",$row["hobbies"]);
		   foreach($hob as $hobbies):
		 ?>
           <input type="checkbox" name="hobbies[]" value="<?=$hobbies?>"
            <?php 
		       foreach($shobs as $shobbies){
				   echo $hobbies == $shobbies?'checked':'';
			   }
			   echo ">".$hobbies;
		     endforeach; ?>
          </td>
    </tr>
     <tr>
      <td>Country visited</td>
      <td><?php 
	   $scountry = explode(",",$row["country"]);
	   $country = array('India','America','Japan','China','Russia','Nepal','Pakistan','England','Australia');
	  ?>---add another country<select name="country[]" multiple>
        <?php 
		  foreach($country as $value):
		     $selected = 0;
		     foreach($scountry as $svalue):
				if($value == $svalue){
				  $selected = 1;
				 }				
		      endforeach;
			    echo "<option value='$value' ".($selected?'selected':'').">$value</option>";
		   endforeach; ?>
           </select>
      </td>
    </tr>
    <tr>
    
      <td>Update your data</td>
      <td><input type="submit" name="submit" id="submit" value="Update"></td>
    </tr>
    
  </tbody>
</table>

</form>

</body>
</html>