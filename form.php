<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['date']) && isset($_POST['message']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$date = $_POST['date'];
	$message = $_POST['message'];

$body = $name."\n".$email."\n".$phone."\n".$date."\n".$message;

	if(mail('flashsingh0@gmail.com ', 'Webiste Response ', $body , 'From: tarjeet98@gmail.com'))
	{
		echo '<color="#000">Mail sent Successfully.';
		echo "<a href='index.html' style='color:#000; display:block;'>Go to Main Page</a>";
	} 
	else {
		echo 'There is a problem in sending mail.';
	}
}  
	else {
		echo 'ok';
	}

?>