<?php
    // grouping statement in php
    //entry controlled loops --> 1. for  2. while
    //exit controlled loop --> do while loop
 echo "<table style='border:2px solid red;'>";
$var=1;

for($index=2;$index<=20;$index++){
    echo"<tr>";
    for($var2=1;$var2<=10;$var2++){
        $var=$index*$var2;

        echo("<td>".$index."x".$var2."=".$var."</td>)
    }
}
   
?>