<?php
/*echo " Welcome to the For_each Loop";
echo "<br>";

$arr = array("bananas","apples","Harpic","Bread");

for ($i=0; $i < count($arr) ; $i++) { 
    echo $arr[$i];
    echo "<br>";
}*/
//for each loop is used only for an array 
//Better way to do this 
$arr = [10,20,30,40,50];
foreach ($arr as $value){
    echo "$value <br>";
}
$arr1 = ["Shailendra","Ritesh","Devesh","Anvesh"];
foreach ($arr1 as $key ){
    echo "$key <br>";    
}
?>