<?php
if(isset($_POST['submit'])){
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

// 1. E-mail your sending it to 
// 2. Subject
// 3. is the messeg
   
$myMail = "info@mohamedTharwat.me";
$header= "From: ".$email;
$message2 = "You have received a message from ".$name . "\n\n".$message;

echo mail($myMail,$subject,$message2,$header);
header("Location: index.php?mailSend=\"Sucess\"");
}
?>