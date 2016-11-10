<?php
	session_start();
	include '../dbh.php';	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$phno = $_POST['phno'];
	$message = $_POST['message'];
	$to = 'meet.abdul.online@gmail.com';
	$subject = 'contactus page message';


	if(empty($first))
	{
    	header("Location: ../contactus.php?error=empty");
    	exit();
	}
	if(empty($last))
	{
    	header("Location: ../contactus.php?error=empty");
    	exit();
	}
	if(empty($email))
	{
    	header("Location: ../contactus.php?error=empty");
    	exit();
	}
	if(empty($phno))
	{
    	header("Location: ../contactus.php?error=empty");
    	exit();
	}
	if(empty($message))
	{
    	header("Location: ../contactus.php?error=empty");
    	exit();
	}
	else{
	mail($to, $subject, $message, "from". $first . $last);
	mail($email, "Football page", "Thank you for contacting us");
			header("Location: ../index.php");
	}
?>  