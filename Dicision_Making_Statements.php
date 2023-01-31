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