<?php


$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']
$number = $_POST['number']

$to ="nizakatkhan2000@gmail.com";

$subject = "Mail From codeconio";
$txt = "name = ". $name ."\r\n Email = " . $email ."\r\n Message = ". $message ."\r\n Contact Number = ". $number ;

$headers = "Form: noreply@codeconia.com" ."\r\n" . 
"CC: somebodyelse@example.com";

if ($email!=NULL) {
	
	mail($to, $subject, $txt,$headers);
}

header("Location:thankyou.html")
?>