<?php
include "connect.php";
if($_GET['key'] && $_GET['reset'])
{
  $email=$_GET['key'];
  $pass=$_GET['reset'];

  $sql = "select email,password from user where md5(email)='$email' and md5(password)='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    ?>
    <form method="post" action="submit_new.php">
    <input type="hidden" name="email" value="<?php echo $email;?>">
    <p>Enter New password</p>
    <input type="password" name='password'>
    <input type="submit" name="submit_password">
    </form>
    <?php
  }
}
?>