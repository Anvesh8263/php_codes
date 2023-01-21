<?php
//Operators in PHP
/*
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. logical Operators
*/


$a = 95;
$b = 5;
//1. Arithmetic Operators
echo  "Result of a + b is " . ($a+$b);
echo "<br>";
echo  "Result of a - b is " . ($a-$b);
echo "<br>";
echo  "Result of a * b is " . ($a*$b);
echo "<br>";
echo  "Result of a / b is " . ($a/$b);
echo "<br>";
echo  "Result of a**b is " . ($a**$b);
echo "<br>";
echo  "Result of a%b is " . ($a%$b);
echo "<br>";
//2. Assignment Operators

$x= $a;
echo "For the value is " . $a . "<br>";

$a += 6;
echo "For the value is " . $a . "<br>";


$a -= 6;
echo "For the value is " . $a . "<br>";

$a *= 6;
echo "For the value is " . $a . "<br>";

$a /= 6;
echo "For the value is " . $a . "<br>";
?>
