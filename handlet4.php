<?php

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$mob=$_REQUEST['mob'];

printf("Name is: %s",$name);
echo "<br>";
printf("Email is: %s",$email);
echo "<br>";
printf("PAssword is: %s",$pass);
echo "<br>";
printf("Mobile is: %d",$mob);

?>