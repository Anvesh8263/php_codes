<?php
function add(){
$val_one=28;
$val_two=64;
$result=$val_one+$val_two;
echo $result;
}

//formal Arguments and ($val_one,$val_two)
//Actual Arguments (20,32,54)

//Write a php script which consists a user defined function along with one fixed string argument during the excecution of the function u have to break the given string as an array and return it back to the calling sets.?

declare(strict_types=1); function add(int $val_one,$val_two){
echo $val_one + $val_two;
}
add("20",78);

//you ahve to esign a function with the given name adomcheca that must read a integer value now u have to check whether a given value is adom number or not and return the output on the screen? 

function adomcheck($num){
    $dup_num = $num;
    $dup_num = $dup_num * $dup_num;
    $dup_num = strrev("$dup_num");
    $dup_num = sqrt((int)$dup_num);
    $dup_num = strrev("$dup_num");
    if($dup_num == $num)
    {
        return "yes";
    }
    else{
        return 'no';
    }
}
echo adomcheck(12);

//u have to design a that must have to two integer parameter name as start_count , end_count along with following sceneriov if the counter is ,multiple of 3 u have to display Ashutosh instead of its counter value if the counter value is the value of 5 u display IBAD if the counter value is the multiple of both u have to display shubham other u have to display the value as it ?

function count($start_count,$end_count){
    if($start_count%3){
        echo "Ashutosh";
       }
}
count(10,40);

?>