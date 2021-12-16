<?php

$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
// $add=$_REQUEST['add'];
// $sub=$_REQUEST['sub'];
// $mul=$_REQUEST['mul'];
// $div=$_REQUEST['div'];

$add=$num1+$num2;
echo "Addition of $num1 and $num2 is: "."$add";    

echo "<br>";

$sub=$num1-$num2;
echo "Substraction of $num1 and $num2 is: "."$sub";

echo "<br>";

$mul=$num1*$num2;
echo "Multiplication of $num1 and $num2 is: "."$mul";

echo "<br>";

$div=$num1/$num2;
printf("Division of $num1 and $num2 is: %.2f",$num1,$num2,$div);

?>