<?php
$name = "Anvesh Mangalam";
echo $name;
echo "<br>";

//  .operator is used to join the two Strings


//strlen is used to find the string length in the string 
echo "Hello my name is "
 . "Anvesh Mangalam " . strlen($name);
 echo "<br>";
 //word count is used to count the words in the string
 echo str_word_count($name);
echo "<br>";
//strrev is used to reverse the string
echo strrev($name);
echo "<br>";
//strpos is used to find the position of the particular word.
echo strpos($name, "Mangalam");
echo "<br>";
//str_replace is used to replace any word to any particular word
echo str_replace("Mangalam"," Kulshrestha",$name);
echo "<br>";
//str_repeat is used to repeat any string again again......
echo str_repeat($name,10);
echo "<br>";
echo "<pre>";
//rtrim is used to remove the white spaces from the right
echo rtrim("    Hello My Name is Anvesh Mangalam     ");
echo "<br>";
////ltrim is used to remove the white spaces from the left
echo ltrim("    Hello My Name is Anvesh Mangalam     ");
echo "</pre>";
//pre is used to remove the white spaces from the both side ie: left and right 
echo ("<pre>     Hello My Name is Anvesh Mangalam      </pre>")
?>
