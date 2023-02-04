<?php
//Dicision Making Statement
//1. Simple if Statement
$age = 16;
//if else ladder
if($age>18){
 echo "You can Drink Tea , Alcohol as well as Water";
}
 elseif($age>14){
 echo "You can Drink Tea and Water No Alcohol for you";
 }
 else{
    echo "You can drink only water";
 }



 if(username =="username" && password == "password"){
    echo "login";
 }else{
    "echo Wrong Username"
 }

//Nested If
 if(username =="username"){
    if(password == "password"){
    echo "login";
}
}else{
    echo "Wrong password";
 }
?>

<?php
//Write a php script that can perform different operations on a string on the bases of differnet situation?
//"The Brown Fox jumps over the lazy dog";is greater than the 15 character and lesss that 59 characters you have to impliment suitable string function to remove all the white spaces 
//if the length of the string 
//if the length of the string is>= 25 characters but <35 characters u have to intechange the words black and brown 
// if the length of the given stirng >=30 but 40<40 characters iu have to breka the stirng into substring having the length 10 characters each 
//if the length is grater than 40 characters u have to convert the given string into an array 
$str = "The Brown Fox jumps over the black lazy dog";
echo substr_count($str," ");
echo "<br>";
$length=strlen($var);
echo $length;
echo "<br>";
if($length>=15 && $length<55){
   echo str_replace(" ","",$str);
}
else{
   echo "Invalid";
   
}
echo "<br>";
if($length>=25 && $length<35){
   echo str_replace("brown","black",$str);
}
else{
   echo "Invalid";
   
}
if($length>=30 && $length<40){
   echo chunk_split($str,10);
}
else{
   echo "Invalid";
   
}






















  


?>