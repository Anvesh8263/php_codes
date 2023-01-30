<?php
echo "Welcome to php tutorial on Functions";

echo "<br>";

function processMarks($marksArr){
    $sum = 0;
    foreach($marksArr as $value){
        $sum+=$value;

    }
    return $sum;
}
$RohanVarshney=[98,97,90,94,92,99];
$sumMarks = processMarks($RohanVarshney);

$Anvesh = [99,97,96,90,100,99];
$sumMarksAnvesh = processMarks($Anvesh);

echo "Total marks Scored by Rohan out of 600  is $sumMarks <br>";

echo "Total marks Scored by Rohan out of 600  is $sumMarksAnvesh";
?>
