<?php

$principle=$_REQUEST['principle'];
$rate=$_REQUEST['rate'];
$time=$_REQUEST['time'];

$SI=($principle*$rate*$time)/100;

printf("Simple Interest is: %.2f",$SI);

?>