<?php
if( isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message']) ){
	$n = $_POST['fname'];
	$l = $_POST['lname'];
	$e = $_POST['email'];	
	$m = nl2br($_POST['message']);
	$to = "fidelicatessen@gmail.com";
	$from = $e;
	$subject = 'Message from portfolio site';
	$message = '<b>FirstName:</b> '.$n.'<br><b>LastName:</b> '.$l.'<br><b>Email:</b> '.$e.'<br><p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
	
}

?>