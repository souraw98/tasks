<?php

$math=$_REQUEST['math'];
$phy=$_REQUEST['phy'];
$chem=$_REQUEST['chem'];
$eng=$_REQUEST['eng'];
$ip=$_REQUEST['ip'];

printf("Maths: %d",$math);
echo "<br>";
printf("Physics: %d",$phy);
echo "<br>";
printf("Chemistry: %d",$chem);
echo "<br>";
printf("English: %d",$eng);
echo "<br>";
printf("IP: %d",$ip);
echo "<br>";

$per=(($math+$phy+$chem+$eng+$ip)/500)*100;

printf("Percentage is: %.2f",$per);

?>