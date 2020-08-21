<?php
include "connect.php";
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];

  $sql = "update register set tokan='1' where md5(email)='$email' AND md5(password)='$pass'";

if ($conn->query($sql) === TRUE) {
    echo "registration varify sucessfully";
} else {
    echo "registration not confirm";
}
}
?>