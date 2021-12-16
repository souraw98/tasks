<?php

$radius=$_REQUEST['radius'];

$area=3.14*$radius*$radius;
$cir=2*3.14*$radius;

printf("Area of circle is: %.2f",$area);
echo "<br>";
printf("Circumfrence of circle is: %.2f",$cir);

?>