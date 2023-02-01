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
echo "<br>";
//Array_merge();
$raj10=[10,20,30,80,50,100,990];
$raj11=[10,20,30,80,50,100,990];
print_r(array_merge($raj10,$raj11));
echo "<br>";
 
$raj11=[10,20,30,80,50,100,990];
print_r(array_reverse($raj11));
echo "<br>";

$raj10=[10,70,30,80];
$raj11=[10,50,20,80];
print_r(array_replace($raj10,$raj11));
echo "<br>";

$arry=array_fill(100,100,1);
print_r($arry);
echo "<br>";

$arry=['a','b','c','d'];
$arry1=array_fill_keys($arry,10);
print_r($arry1);
echo "<br>";









$arr1=[10,20,30,40,50];
array_multisort($arr1);
print_r($arr1);
echo "<br>";

$arr1=[10,20,50];
print_r(array_pad($arr1,10,5));
echo "<br>";

$arr1=[10,20];
array_push($arr1,45);
print_r($arr1);
echo "<br>";

$arr1=[10,20];
array_pop($arr1);
print_r($arr1);
echo "<br>";

$arr1=[10,20,50];
print_r(array_product($arr1));
echo "<br>";

$arr1=[10,20,50];
print_r(array_search(20,$arr1));
echo "<br>";

$arr1=[10,20,50];
array_shift($arr1);
print_r($arr1);
echo "<br>";
$arr1=[1,2,3,4,5,8,10,12,14,15,18];
$min = min($arr1);
$max = max($arr1);
$arr_new=range($min,$max);
print_r($arr_new);
echo "<br>";

$arr1=[10,20,30,4,5,6,2];
//$arr_data=array_slice($arr,3);
$arr_data=array_slice($arr1,2,5);
print_r($arr_data);
echo "<br>";

$data = [10,20,30,40,70,59,34];
$data_rep = [20,40];
$data_new = array_splice($data,3,2,$data_rep);
print_r($data);
echo "<br>";



?>