<?php
// => strlen(string) function

$words = "Save Myanmar";
echo strlen($words); //12


// => str_word_count(string) function
// => str_word_count(string,return) function

// 0 = Default(string)
// 1 = Return an array 
// 2 = Return an array 


$text = "Save Myanmar Country";
echo str_word_count($text); //3

echo str_word_count($text,0); //3
echo "<pre>".print_r(str_word_count($text,1),true)."</pre>"; // Array([0] => Save [1] => Myanmar [2] => Country)
echo "<pre>".print_r(str_word_count($text,2),true)."</pre>"; // Array([0] => Save [5] => Myanmar [13] => Country)

echo "<br/>";

// -----------------------


// => ucwords(string) function (each first letter change to capital letter)
// => ucwords(string,delimiters) function;  (first letter change to capital letter and sperator with comma)

$country = "welcome to myanmar country,i live in yangon"; 
echo ucwords($country); //Welcome To Myanmar Country,i Live In Yangon
echo "<br/>";
echo ucwords($country,","); // Welcome to myanmar country,I live in yangon


echo "<br/>";

// -----------------------

// => ucfirst(string) Function (first letter change to capital letter)
$message = "welcome to myanmar country,i live in yangon";
echo ucfirst($message);

echo "<br/>";

// -----------------------


// => lcfirst(string) Function (each first letter change to lower letter)
$msg = "Welcome to myanmar country,I live in yangon";
echo lcfirst($msg); // welcome to myanmar country,I live in yangon

echo "<br/>";

// -----------------------


// => strtoupper(string) Function (each letter change to upper)
$string = "Welcome to myanmar country,I live in yangon";
echo strtoupper($string); // WELCOME TO MYANMAR COUNTRY,I LIVE IN YANGON

echo "<br/>";

// -----------------------

// => strtolower(string) Function (each letter change to lower)
$str = "WEMCOLE to My Country";
echo strtolower($str); // wemcole to my country

echo "<br/>";

// -----------------------

// => chunk_split(string,length,delimiter) Function
$letters = "Myanmar Country";
echo chunk_split($letters,1,".") , "<br/>"; // M.y.a.n.m.a.r. .C.o.u.n.t.r.y.
echo chunk_split($letters,3,"-") , "<br/>"; // Mya-nma-r C-oun-try-



// -----------------------

// => strpos(string,find) Function / (pos=position)
// => strrpos(string,find) Function / (pos=position)
// => stripos(string,find) Function / (pos=position)
// => strirpos(string,find) Function / (pos=position)


$captions = "Lorem Ipsum is simply dummy text of the printing and typesetting industry Ipsum.";
echo strpos($captions,"Ipsum")  , "<br/>"; //6 (index number)
echo strrpos($captions,"Ipsum") , "<br/>"; // 74 (index number) [r = reverse ]
echo stripos($captions,"Printing") , "<br/>"; // 40 (index number)  [i = no case sensative  ]
echo strripos($captions,"Ipsum") , "<br/>"; //74 (index number)

// -----------------------


// => substr(string, start index/offset, end length) Function

$country = "Welcome Myanmar";
echo substr($country,0) , "<br/>"; // Welcome Myanmar
echo substr($country,8) , "<br/>"; // Myanmar
echo substr($country,0,7) , "<br/>"; // Welcome
echo substr($country,0,9) , "<br/>"; // Welcome M

// -----------------------


// => str_replace(search,replace,string) function
$topic = "Save Myanmar";
echo str_replace("Myanmar","CRPH",$topic)  , "<br/>"; // Save CRPH

// -----------------------


// => substr_replace(string,replace,start index) function
// => substr_replace(string,replace,start index, end length) function

$greeting = "Welcome Myanmar";
echo substr_replace($greeting,"Hello",0)  , "<br/>"; // Hello
echo substr_replace($greeting,"Thaniland",8)  , "<br/>"; // Welcome Thaniland

echo substr_replace($greeting,"Hello",0,0)  , "<br/>"; // HelloWelcome Myanmar
echo substr_replace($greeting,"Hello",0,3)  , "<br/>"; // Hellocome Myanmar
echo substr_replace($greeting,"Hello",0,7)  , "<br/>"; // Hello Myanmar

// -----------------------

// => trim() function [ဘယ်ညာ spaceများကိုဖျက်]
// => trim(string,characters) Function  [ဘယ်ညာ စာသားများကိုဖျက် , အလယ်စာသားများကို ဖျက်လို့မရ]

$title = " Welcome to My Country ";
echo trim($title) , "<br/>"; //Welcome to My Country

$subtitle = "Welcome to My Country";
echo trim($subtitle,"Wel") , "<br/>"; //come to My Country
echo trim($subtitle,"try") , "<br/>"; //come to My Coun



// => rftrim() function
// => rtrim(string,characters) Function
    $sayhello = "/Mingalarpar/";
    echo rtrim($sayhello,"/") , "<br/>"; // /Mingalarpar


// => str_repeat() Function
// => str_repeat(string,count) Function
echo str_repeat("A kyal Gyi",3) , "<br/>";



// => strcmp(string1, string2) Function (case-sensitive) [compare = နှိုင်းယှဉ်]
// 0 = if the two strings are equal 
// <0 = if string1 is lessthan string2
// >0 = if string1 is greater than string2 

echo strcmp("I Love MY Job","I Love MY Job") , "<br/>"; // 0
echo strcmp("I Love MY Job","I Love MY job") , "<br/>"; // -32
echo strcmp("I Love MY Job","I Love") , "<br/>"; // 1
echo strcmp("I Love","I Love MY Job") , "<br/>"; // -1


// => explode(separator,string,limit) Function [transfer string to array]
$words = "Welcome to My Country";
echo "<pre>".print_r(explode(" ",$words),true)."</pre>" , "<br/>"; //( [0] => Welcome [1] => to [2] => My [3] => Country )

echo "<pre>".print_r(explode(" ",$words,0),true)."</pre>" , "<br/>"; //( [0] => Welcome to My Country )
echo "<pre>".print_r(explode(" ",$words,1),true)."</pre>" , "<br/>"; //( [0] => Welcome to My Country )
echo "<pre>".print_r(explode(" ",$words,2),true)."</pre>" , "<br/>"; //( [0] => Welcome [1] => to My Country )
echo "<pre>".print_r(explode(" ",$words,3),true)."</pre>" , "<br/>"; //( [0] => Welcome [1] => to [2] => My Country )

// => implode(separator,array) Function [transfer array to string]
$words = ["Welcome","to","My","City"];

echo implode(" ",$words) , "<br/>";
echo implode("-",$words) , "<br/>";


// => join(separator,array) Function [transfer array to string]
$words = ["Welcome","to","My","City"];

echo join(" ",$words) , "<br/>";
echo join("-",$words) , "<br/>";


// => number_format(number) Function
// => number_format(number,decimals) Function
echo number_format("10000000") , "<br/>"; // 10,000,000
echo number_format("10000000",2) , "<br/>"; // 10,000,000.00

// => stripslashes(string) function [delete \ backwrod slash]
$str = 'she\'s my mother';
echo $str  , "<br/>"; // she's my mother

$str = "he\'s my father";
echo $str  , "<br/>"; // he\'s my father

$str = "he\'s my father";
echo stripslashes($str)  , "<br/>"; // he's my father


// => basename() Function
// => basename(path,suffix)
$path = "./assets/img/cover.jpg";
echo $path , "<br/>"; // ./assets/img/cover.jpg
echo basename($path) , "<br/>"; // cover.jpg
echo basename($path,".jpg") , "<br/>"; // cover




// => pathinfo(path) Function
// => pathinfo(path,flags)

// PATHINFO_DIRNAME
// PATHINFO_BASENAME
// PATHINFO_EXTENSION
// PATHINFO_FILENAME

$filepath = "./assets/img/cover.jpg";
echo "<pre>".print_r(pathinfo($filepath),true)."</pre>" , "<br/>"; //( [dirname] => ./assets/img [basename] => cover.jpg [extension] => jpg [filename] => cover)
echo pathinfo($filepath)["dirname"] , "<br/>"; // ./assets/img
echo pathinfo($filepath)["basename"] , "<br/>"; // cover.jpg
echo pathinfo($filepath)["extension"] , "<br/>"; // jpg
echo pathinfo($filepath)["filename"] , "<br/>"; // cover

echo pathinfo($filepath,PATHINFO_DIRNAME) , "<br/>"; // ./assets/img
echo pathinfo($filepath,PATHINFO_BASENAME) , "<br/>"; // cover.jpg
echo pathinfo($filepath,PATHINFO_EXTENSION) , "<br/>"; // jpg
echo pathinfo($filepath,PATHINFO_FILENAME) , "<br/>"; // cover

?>
