<?php
include "connect.php";
if(isset($_POST['submit_password']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];



$sql = "update user set password='$pass' where md5(email)='$email'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}
?>