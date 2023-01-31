<?php
//echo("Rohan Getting Marks in Various Subjects");
//echo"<br>";
//echo"<br>";
//Array can fetch only a particular integer not a full array
//. opperator is used for concatination
/*$arr2 = ["Maths"=>99,"Physics"=>93,"Chemistry"=>92,"Biology"=>94];
foreach ($arr2 as $key=>$val){
    echo "$key <br>";
    echo "$val <br>";
    
}

$Anvesh = ["Maths"=>99,"Physics"=>93,"Chemistry"=>92,"Biology"=>94];
foreach ($Anvesh as $index=>$val){
    echo "Marks of Anvesh in $index is:$val";
echo"<br>";*/
//}
//$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//Array Function
//it works on both numerical and string 
//keycase is works on Associative Array 
//It works on Associative Array
/*print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
print_r(array_chunk($age,2,true));*/
//it wants two parameter 
//print_r(array_column());
//it works two dimensional array

//it want two parameters and both are Array
//in first  array all elements are in string
//in second array all elements are in numerical
//it works on indexed array

//$fname=array("Peter","Ben","Joe");
//$age=array("35","37","43");

//$c=array_combine($fname,$age);
//print_r($c);

//array_count_values 
//it works index Array

//$raj = [10,20,30,40,50,10,20];
//print_r(array_count_values($raj));

//keys never be duplicate 
//echo"<br>";
//array_diff
$raj3=[10,20,30,80,50,100,990];
$raj2 = [10,20,30,40,50,10,20];
print_r(array_diff($raj3,$raj2));

echo"<br>";
//demand for two index Array
$raj4=["Anvesh","Sachin","Shailendra","Ritesh","Divyanshu"];
$raj5 = ["Devesh","Aryan","Kaustub","Shailendra","Sachin","Vinayak"];
print_r(array_diff($raj4,$raj5));

echo"<br>";
//array_intersect
$raj9=[10,20,30,80,50,100,990];
$raj8 = [10,20,30,40,50,10,20];
print_r(array_intersect($raj9,$raj8));
echo "<br>";
//array_sum
$raj10=[10,20,30,80,50,100,990];
print_r(array_sum($raj10));
echo "<br>";
//min
$raj11=[10,20,30,80,50,100,990];
print_r(min($raj11));
echo "<br>";
//max
$raj12=[10,20,30,80,50,100,990];
print_r(max($raj12));

?>