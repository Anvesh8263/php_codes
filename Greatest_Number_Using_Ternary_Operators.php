<?php
$val_one = 86;
$val_two = 98;
$val_three = 95;
$val_four = 92;


$max = $val_one>$val_two?$val_one:$val_two;
$max = $max>$val_three?$max:$val_three;
$max = $max>$val_four?$max:$val_four;
echo $max;

?>
