<?php
include "connect.php";
if(isset($_POST['submit_email']) && $_POST['email'])
{

$email=$_POST['email'];

$sql = "SELECT email,password from user where email='$email'";
$result = $conn->query($sql);

$row = $result->fetch_assoc(); 
     $email=md5($row['email']);
      $pass=md5($row['password']);
    
    $message="<a href='www.sanjaywebdesigner.com/repass/reset.php?key=".$email."&reset=".$pass."'>Click To Reset password</a>";
   
    


// More headers
$headers .= 'From: <sanjay@sanjaywebdesigner.com>' . "\r\n";
$to=$_POST['email'];
$subject="password reset mail";


$s=mail($to,$subject,$message,$headers);


    if($s)
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  }



}
?>