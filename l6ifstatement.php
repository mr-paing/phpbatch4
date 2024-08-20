<?php
// if statement

$x = 10;
$y = 20;

if($x > $y){
    echo "Your conditionn is yes";
}

if($x < $y){
    echo "Your condition is yes";
}

echo "<br/>";


// => if else

if($x > $y){
    echo "Yes, x greater than y";
}else{
    echo "No, x less than y";
}

echo "<br/>";

// Short Hand 
if($x < $y) echo "Yes, x greater than y"; else echo "No, x less than y";

echo "<br/>";

$color = "gray";
$colorvalue = $color;  //Assign by reference

echo $color;
echo $colorvalue;

echo "<br/>";

if($colorvalue === "red"){
    echo "My fav color is red";
}else{
    echo "I hate red color";
}

echo "<br/>";

if($colorvalue === "red"){
    echo "My fav color is $color";
}else{
    echo "I hate $color color";
}

echo "<br/>";

$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b > $c){
    echo "it is true";
}else{
    echo "it is false"; //false
}

echo "<br/>";

if($a < $b && $b < $c){
    echo "it is true"; //true
}else{
    echo "it is false";
}

echo "<br/>";

if($a < $b || $b > $c){
    echo "it is true"; //true
}else{
    echo "it is false"; 
}

echo "<br/>";

// => || &&

if($a < $b || $a > $b && $a > $c){
    echo "it is true"; //true
}else{
    echo "it is false";
}

echo "<br/>";

if(($a < $b || $b > $c) && $a > $c ){
    echo "it is true";
}else{
    echo "it is false"; // false
}

echo "<br/>";

// => !()

if(!($a < $b)){
    echo "it is true"; 
}else{
    echo "it is false"; // false
}

echo "<br/>";

//=> if() elseif() else 

// Multi Line 
if($b > $c){
    echo "it is true";
}elseif($b === 200){
    echo "it is equal"; //equal
}else{
    echo "it is false";
}

echo "<br/>";

if($a > $b)
    echo "it is true";
else if($b === 200)
    echo "it is equal"; //equal
else 
    echo "it is false";

echo "<br/>";

// Single Line 

if($a > $b) echo "it is true"; elseif($b === 200) echo "it is equal"; else echo "it is false"; // equal

echo "<br/>";


// switch 
// syntax 
// switch(condition){
//     case stmt1:
//         code to be executed;
//         break;
//     case stmt2:
//         code to be executed;
//         break;
    
//     default:
//         code to be executed;
//         break;

// }

$phone = "samsung";

switch($phone){
    case "sony":
        echo "I can't buy sony";
        break;
    case "iphone":
        echo "I hate apple product";
        break;
    case "mi":
        echo "I can buy mi";
        break;
    case "samsung":
        echo "My fav mobile is samsung";

    default :
        echo "I love keypad";
}


?>