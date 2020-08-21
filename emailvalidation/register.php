<?php
include "connect.php";
$sql = "INSERT INTO register (username, password, email, tokan)
VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]', '0')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$email=md5($_POST['email']);
$pass=md5($_POST['password']);
 $link="<a href='www.sanjaywebdesigner.com/emailvalidation/reset.php?key=".$email."&reset=".$pass."'>Click To comifirm regitration</a>";
   
    $message= $link;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

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
$conn->close();
?>