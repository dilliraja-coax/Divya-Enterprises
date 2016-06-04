<?php
	
$nameErr = $emailErr = $contactErr = $messageErr = "";
$name = $email = $contact = $message = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
	  if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {
			$nameErr = 'Name must contains only letters';
		}
   $name = test_input($_POST["name"]);
  }
 
  if (empty($_POST["contact"])) {
    $contactErr = "Contact is required";
  } else {
	  if (!preg_match('/^\d{10}$/', $_POST["contact"])) {
			$contactErr = 'Please enter a valid Contact No.';
		}	  
	  $contact = test_input($_POST["contact"]);
}
 
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {	  
	if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
			$emailErr = 'Please enter a valid email address';
		}
    $email = test_input($_POST["email"]);
  }
 
  if (empty($_POST["message"])) {
    //$messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }
 
if( !($name=='') && !($email=='') && !($contact=='') )
{ // Checking valid email.
if (preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST["email"]) )
{
if (preg_match('/^\d{10}$/', $_POST["contact"])) 
{
if (preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) {

$to       = 'Selva@diviyaenterprises.com';
$subject  = 'Divya Enterprises-Contact';
$subject1  = 'Divya Enterprises';
$message2  = "$name Contacted Us. <br><br>Here is some information about $name.<br><br>
Name: $name<br>
E-mail: $email<br>
Contact No: $contact<br>
Message: $message <br> <br> Thanks,<br> COAX TEAM";
$message1  = "Hi $name, <br><br>Thanks for contacting us..! <br> <br> We will contact you as soon as possible.<br><br> Regards,<br>Divya Enterprises";
$headers  = 'From: CoaxTeam@diviyaenterprises.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
$headers1  = 'From: Selva@diviyaenterprises.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
if(mail($email, $subject1, $message1, $headers1) &&  mail($to, $subject, $message2, $headers))
{
$successMessage = "Message sent successfully.......";
}
}
}
}
else
{ $emailErr = "Invalid Email";
 } 
 }
} 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
?>