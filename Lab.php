<?php
//part 1
//$data ="welcome class";
//$data_new='section f';
//var_dump($data);

//echo "<br>";

//var_dump($data_new);

//echo "<br>";

//echo "hello \n welcome $data";
//echo  'hello \n welcome $data_new';

//part 2
//echo 'welcome to tutorial\'s php';

//echo "<br>";

//echo "welcome to \"GLA\"";

//part 3
//$data= <<< my_string
//Hello's class \n "Welcome"
//my_string;
//echo $data;
//
//echo "<br>";
//
//$data_two= <<<a 'my_string'
//Hello's class \n "Welcome"
//my_string;
//echo $data_two;

//Funtion of String

//(1).  addcslashes()
//echo addcslashes("Hello class","se");
//
//echo "<br>";
//(2). addslashes
//echo addslashes("hell'o class");
//
//echo "<br>";

//(3). bin2hex
//echo bin2hex("hello");

//echo "<br>";

//(4). chop
//$var=" phpp";
//$var_new= chop("$var","ph");
//var_dump($var);
//echo "<br>";
//var_dump($var_new);
//chop function only remove right side spaces of rhe string.

//(5). chunk_split
//echo chunk_split("helloo",2);
//echo "<br>";
//echo chunk_split("helloo",2,':');

//(6). convert_uuencode and convert_uudecode
//echo convert_uuencode("akash");
//echo "<br>";
//echo convert_uudecode("%86MA");

//(7). chr and ord
//echo chr(116);
//echo "<br>";
//echo ord('A');

//count char
//print_r(count_chars("Hello"));
//echo "<br>";
//print_r(count_chars("Hello",1));
//echo "<br>";
//print_r(count_chars("Hello",2));
//echo "<br>";

//crypt
//echo crypt("hello","1");
//echo "<br>";
//echo crc32("h");

//explode()
//print_r(explode("e","Hello"));
//print_r(explode("e","Hello Welcome"));


//implode()
//print_r(implode(" ",['H','e','l','l','o']));

//join
//print_r(join(" ",['H','e','l','l','o']));

//echo htmlentities("<a href = 'google.com'>google</a>");
//echo "<br>";
//echo html_entity_decode("<a href = https://www.google.com/>google</a>");

//lcfirst
print_r(lcfirst("Hello"));
echo "<br>";
//ucfirst
print_r(ucfirst("hello"));
echo "<br>";
//strtoupper
print_r(strtoupper("hello class"));
echo "<br>";
//strtolower
print_r(strtolower("HELLO CLASS"));
echo "<br>";
//ltrim
print_r(ltrim("  HELLO"));

echo "<br>";
//rtrim
print_r(rtrim("hello   "));
echo "<br>";
//md5
print_r(md5("Hello Welcome"));
echo "<br>";
//metaphone
print_r(metaphone("Hello Class"));
echo "<br>";
//number_format
print_r(number_format(2.65344));
echo "<br>";
//sha1
print_r(sha1("Hello"));
echo "<br>";
//str_replace
echo(str_replace("w","d","world"));
echo "<br>";
//str_repeat
echo(str_repeat("Hello",5));
echo "<br>";
//str_pad
echo(str_pad("Hello",10,"o"));
echo "<br>";
//str_shuffle
echo(str_shuffle("Anvesh"));
//str_split
//echo(str_split("Anvesh",1));
//str_word_count
echo(str_word_count("Hello Class"));
echo "<br>";
echo(strcmp("hee","he"));
echo "<br>";
//strcasecmp
//echo((strcasecmp));
//echo "<br>";
//strlen
//echo(strlen("heloo"));
//echo "<br>";
//strpos
//echo(strpos("hee","he"));
//echo "<br>";
//stripos
//echo(stripos("hee","he"));
//echo "<br>";
//strstr
echo(strtr('Hay','a','e'));
echo"<br>";
echo(strtr('Hilla warld','ia','eo'));
echo "<br>";
echo(substr("Hello World",10));

?>