<?php 

function mailPaper($location){

	$to = 'mustapha.hamoui@gmail.com';

	$subject = 'Today\'s Annahar Newspaper';
	
	$headers = "From: mustapha@hamoui.com" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<html><body>';
	$message .= '<h1>Hey Mus!</h1>';
	$message .= '<p><a href="' . $location . '">Here</a> is today\'s newspaper. Enjoy! </p>';
	$message .= '</body></html>';

	mail($to, $subject, $message, $headers);

}



?>