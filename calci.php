<?php
$num_one=$_POST['fname'];
$num_two=$_POST['sname'];

if(isset($_POST['Additon']))
{
    echo"Addition of Two Number is $num_one & $num_two is:".$num_one+$num_two;
}
if(isset($_POST['Subtraction']))
{
    echo"Subtraction of Two Number is $num_one & $num_two is:".$num_one-$num_two;
}
if(isset($_POST['Division']))
{
    echo"Division of Two Number is $num_one & $num_two is:".$num_one/$num_two;
}
if(isset($_POST['Multiplication']))
{
    echo"Multiplication of Two Number is $num_one & $num_two is:".$num_one*$num_two;
}

?>