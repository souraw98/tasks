<?php

$len=$_REQUEST['len'];
$bth=$_REQUEST['bth'];

$area=$len*$bth;
printf("Area of rectangle is: %.2f square centimeter",$area);

echo "<br/><br>";

$para=2*($len+$bth);
printf("Parameter of rectangle is: %.2f centimeter",$para);

?>