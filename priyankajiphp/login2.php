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
		?>

		<input type="text" value="<?php echo $row['username']?>"><br>
<?php
		echo $row['password']."<br>";
		echo $row['phone']."<br>";
		?>
		
		<input type="radio" name="gender" value="male" <?php echo $row['gender']=="male"?'checked':'';?>> Male
      <input type="radio" name="gender" value="female" <?php echo $row['gender']=="female"?'checked':'';?>>  Female<br>

	<?php
		   $hob = array('singing','reading','playing','cricket','hocky');
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
				  <br>
<img src="uploads/<?php echo $row['photo'] ?>">
<?php
	}
	else
	{
		header('Location:login1.html');
	}
}
?>