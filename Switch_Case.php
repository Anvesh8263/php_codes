<?php
$age=50;
//If-else enforces linear search. Switch statement enforces binary search.
switch ($age) {
    case 50:
     echo " you are 50 years old";
     break;
     case 60:
        echo " you are 60 years old";
        break;
        case 80:
        echo " you are 80 years old";
        break;
    default:
        echo "Your age is weird";
        break;
}
?>