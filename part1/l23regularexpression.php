<?php 

$string = "We are family";
echo $string , "<br/>";

    // preg_match(pattern or delimeter , string );

// $result = preg_match("We are family",$string);  // can't print cuz it donsn't work without delimeter

$result = preg_match("/We are family/",$string); //true = 1
$result = preg_match("/family/",$string); // true = 1
$result = preg_match("/Family/",$string); // false = 0
$result = preg_match("/mily/",$string);  // true = 1

$result = preg_match("/mily$/",$string);  // true = 1
$result = preg_match("/family$/",$string);  // true = 1
$result = preg_match("/Family$/",$string);  // false = 0
$result = preg_match("/are$/",$string);  // false = 0
$result = preg_match("/We$/",$string);  // false = 0

$result = preg_match("/^mily/",$string);  // false = 0
$result = preg_match("#^family#",$string);  // false = 0
$result = preg_match("!^Family!",$string);  // false = 0
$result = preg_match("*^are*",$string);  // false = 0
$result = preg_match("#^We#",$string);  // true = 1

$result = preg_match("/^family$/",$string);  // false = 0 | note:: string must be exact "family"
$result = preg_match("/^$/",$string);  // false = 0 | note:: string must be empty

$result = preg_match("/we/i",$string); // true = 1
$result = preg_match("/^we/i",$string); // true = 1
$result = preg_match("/^We/i",$string); // true = 1


$result = preg_match("/[b-d]/",$string); // false = 0
$result = preg_match("/[a-f]/",$string); // true = 1
$result = preg_match("/[a-z]/",$string); // true = 1
$result = preg_match("/[A-Z]/",$string); // true = 1
$result = preg_match("/[0-4]/",$string); // false = 0



$string = "my lucky number is 567";

$result = preg_match("/[0-4]/",$string); // false = 0
$result = preg_match("/[5-9]/",$string); // true = 1
$result = preg_match("/[a-z]/",$string); // true = 1
$result = preg_match("/[A-Z]/",$string); // false = 0
$result = preg_match("/[A-Z] | [a-z]/",$string); // true = 1
$result = preg_match("/[A-Z , a-z]/",$string); // true = 1
$result = preg_match("/^[a-z]/",$string); // true = 1
$result = preg_match("/[a-z]$/",$string); // false = 0
$result = preg_match("/^[5-9]/",$string); // false = 0
$result = preg_match("/[5-9]$/",$string); // true = 1



$result = preg_match("/[^a-z]$/",$string); // true = 1 | Note :; it's mean that not included a to z ! , result is true cuz $string included spacing and digit
$result = preg_match("/[^5-9]$/",$string); // true = 1 | Note :; it's mean that not included 5 to 9 ! , result is true cuz $string included spacing and digit
$result = preg_match("/[^0-4]$/",$string); // true = 1 | Note :; it's mean that not included 0 to 4 ! , result is true cuz $string included spacing and digit

$result = preg_match("/@/",$string); // false = 0

$string = "admin@gmail.com";

$result = preg_match("/@/",$string); // true = 1
$result = preg_match("/m/",$string); // true = 1
$result = preg_match("/m+/",$string); // true = 1
$result = preg_match("/b+/",$string); // false = 0
$result = preg_match("/b*/",$string); // true = 1
$result = preg_match("/b?/",$string); // true = 1

$result = preg_match("/m{1}/",$string); // true = 1
$result = preg_match("/m{2}/",$string); // false = 0


$string = "adminn@gmail.com";

$result = preg_match("/n{1}/",$string); // true = 1
$result = preg_match("/n{2}/",$string); // true = 1
$result = preg_match("/n{3}/",$string); // false = 0
$result = preg_match("/n{2,3}/",$string); // true = 1
$result = preg_match("/n{2,}/",$string); // true = 1 unlimite but at least one
$result = preg_match("/n{\s}/",$string); // false = 0

$string = "V8 Engine";
$result = preg_match("/\s/",$string); // true = 1
$result = preg_match("/\d/",$string); // true = 1
$result = preg_match("/\D/",$string); // true = 1
$result = preg_match("/\w/",$string); // true = 1
$result = preg_match("/\W/",$string); // true = 1


$string = "528";
$result = preg_match("/\d/",$string); // true = 1
$result = preg_match("/\D/",$string); // false = 0
$result = preg_match("/\w/",$string); // true = 1
$result = preg_match("/\W/",$string); // false = 0


$string = "admin@gmail.com";
$result = preg_match("/a\wm/",$string); // true = 1
$result = preg_match("/a\w{1}m/",$string); // true = 1
$result = preg_match("/a\w{2}m/",$string); // false = 0         , cuz any exact 2 wordsd            // adbmin@gmail.com
$result = preg_match("/a\w{2,4}m/",$string); // false = 0       , cuz any exact 2 to 4 words        // adbcdmin@gmail.com
$result = preg_match("/a\w{2,}m/",$string); // false = 0        , cuz any exact 2 to more words     // adbcdef@gmail.com

$result = preg_match("/a.m/",$string); // true = 1
$result = preg_match("/a..m/",$string); //  false = 0         // admin@gmail.com
$result = preg_match("/a.{1}m/",$string); //  true = 1        
$result = preg_match("/a.{2}m/",$string); //  false = 0         , cuz any exact 2 wordsd         //adbmin@gmail.com
$result = preg_match("/a.{2,4}m/",$string); //  false = 0       ,  cuz any exact 2 to 4 words        // adbcdmin@gmail.com
$result = preg_match("/a.{2,}m/",$string); //  false = 0        , cuz any exact 2 to more words     // adbcdef@gmail.com


$string = "admin@gmail.com";
$result = preg_match("/a\wm/",$string); // true = 1


$string = "php";
$result = preg_match("/.{2}/",$string); // true = 1


$string = "php";
$result = preg_match("/hp/",$string); // true = 1
$result = preg_match("/p(hp)*/",$string); // true = 1
$result = preg_match("/p(hp)+/",$string); // true = 1               , false condition = p , pbp pcc p hp


$string = "Vv";
$result = preg_match("/.{2}/",$string); // true = 1
$result = preg_match("/^.{2}$/",$string); // true = 1


$string = "Welcome to our <i> programming class </i> ";
$result = preg_match("/<i><\/i>/",$string); // false = 0
$result = preg_match("/<i>\w<\/i>/",$string); // false = 0          , cuz one chars
$result = preg_match("/<i>\w*<\/i>/",$string); // false = 0         , cuz contained space
$result = preg_match("/<i>.<\/i>/",$string); // false = 0
$result = preg_match("/<i>.*<\/i>/",$string); // true = 1
$result = preg_match("/<i>(.*)<\/i>/",$string); // true = 1


$string = "admin@gami.com";
$result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/",$string); //true = 1 // to check email address or not


//preg_replace(pattern,replacement,string);

$string = "Are you ready to learn PHP Framework";
$result = preg_replace('/php/','javascript',$string); // Are you ready to learn PHP Framework
$result = preg_replace('/php/i','javascript',$string); // Are you ready to learn javascript Framework
$result = preg_replace('/\s/','',$string);  // AreyoureadytolearnPHPFramework



// Bracket Expressions 
$string = "admin123@gmail .com";
$result = preg_replace('/[[:space:]]/','',$string); // admin123@gmail.com
$result = preg_replace('/[[:space:]]/','x',$string); // admin123@gmailx.com
$result = preg_replace('/[[:alpha:]]/','x',$string); // xxxxx123@xxxxx .xxx
$result = preg_replace('/[[:digit:]]/','x',$string); // adminxxx@gmail .com
$result = preg_replace('/[[:alnum:]]/','x',$string); // xxxxxxxx@xxxxx .xxx
$result = preg_replace('/[[:punct:]]/','x',$string); // admin123xgmail xcom

$string = "Admin123@gmail .Com";
$result = preg_replace('/[[:lower:]]/','x',$string); // Axxxx123@xxxxx .Cxx
$result = preg_replace('/[[:upper:]]/','x',$string); // xdmin123@gmail .xom


$string = "Are you ready to learn PHP Framework";
$result = preg_replace(["/PHP/","/framework/"],["Javascript","libraries"],$string); //Are you ready to learn Javascript Framework
$result = preg_replace(["/PHP/","/framework/i"],["Javascript","libraries"],$string); // Are you ready to learn Javascript libraries

$string = "My lucky number is 007 but i got ticket number 5700";
$result = preg_replace("/[0-9]/","x",$string); // My lucky number is xxx but i got ticket number xxxx
$result = preg_replace("/[0-9]+/","x",$string); // My lucky number is x but i got ticket number x

echo $result;


            // no limit = 0 (or) NULL
// preg_split(pattrrn,string,limit,flags);
$string = "My lucky number is 007";
$result = preg_split("/\s/",$string);

echo "<pre>".print_r($result,true)."</pre>";
echo $result[0] , "<br/>"; // My
echo $result[4] , "<br/>"; // 007


$result = preg_split("/\s/",$string,2);
echo "<pre>".print_r($result,true)."</pre>";
echo $result[0] , "<br/>"; // My
echo $result[1] , "<br/>"; // lucky number is 007


$string = "My lucky number is 007 but i got ticket number 5700";
$result = preg_split("/\s/",$string);
$result = preg_split("/\s/",$string); 
$result = preg_split("/\s,/",$string); // [0] => My lucky number is 007 but i got ticket number 5700
$result = preg_split("/[\s,]/",$string); 


$result = preg_split("/[\s,]/",$string,NULL,PREG_SPLIT_NO_EMPTY); 
$result = preg_split("/[\s,]/",$string,0,PREG_SPLIT_NO_EMPTY); 
$result = preg_split("//",$string); 
$result = preg_split("//",$string,NULL,PREG_SPLIT_NO_EMPTY); 
$result = preg_split("//",$string,0,PREG_SPLIT_NO_EMPTY); 


// preg_quote(string,delimiter);

$string = "He\s my father, Do you know him ?";  
$result = preg_quote($string); // He\\s my father, Do you know him \?

$result = preg_quote($string,"o"); // He\\s my father, D\o y\ou kn\ow him \?



//preg_match_all(pattern,string,match/return,flags);
$string = "Winning numbers are 227-000 & 002-777 , but my ticket number are 007-222 & 112233";
preg_match_all("/\d+-\d+/",$string,$result,PREG_SET_ORDER);
preg_match_all("/\d+-\d+/",$string,$result,PREG_PATTERN_ORDER);

echo "<pre>".print_r($result,true)."</pre>";


// Lookahead & Lookbehind 
// (?=) positive Lookahead (or) regex lookahead = right hand side
// (?<=) positive Lookbehind (or) regex lookbehind = left hand side

// (?!) negaive Lookahead (or) regex lookahead 
// (?<!) negative Lookbehind (or) regex lookbehind 

$string = "aungkyaw@cisco.com";
$result = preg_match("/@(?=cisco)/",$string); // true (positive lookahead)
$result = preg_match("/(?<=@)cisco/",$string); // true (positive lookbehind)

$result = preg_match("/@(?!cisco)/",$string); // false (negative lookahead)
$result = preg_match("/(?<!@)cisco/",$string); // false (negative lookbehind)
echo $result;

?>

<!-- 
    $ must be in end (case sensitive) 
    ^ [shift + 6] must be start (case sensitive) , caret or circumflex.
    i no case sensitive 
    [] range a-z A-Z 0-9
    m+ must contain at leaset one m and more 
    b * can contain b or not and more 
    b? can contain b or not and more 
    m{nth} contain (same place or couple) place m as per nth and more
    m{nth,nth} contain some place m as per nth and more
    m{nth,} contain some place m as per nth and more

    \s space
    \d digit
    \D no digit [digit မဟုတ်ေသာ အရာများ ]
    \w any word [a-z] [A-Z] [0-9]
    \W any @#$%^&*.....

    .  any character
    () this 
    +  must
    *  can


    p(hp)* can be contain hp
    p(hp)+ must be contain hp

    [[:space:]]  space 
    [[:alpha:]]  alphabetic
    [[:digit:]]  digit
    [[:alnum:]]  alphanumberic
    [[:punct:]]  puncturation
    [[:lower:]]  lower-case
    [[:upper:]]  upper-case

-->