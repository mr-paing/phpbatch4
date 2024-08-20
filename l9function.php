<?php

// User Defined Function 
// function name(){
//     code to be executed;
// }


//...................

// Parameter function (or) Argument Functions
// (i) Single
// (ii) Multi 

// function name($arg1){
//     code to be executed;
// }

// function name($arg1,$arg2){
//     code to be executed;
// }

//....................

// Default Parameter Function (or) Default Argument Function 

// function name($name="aung aung",$age=20){
//     code to be executed;
// }

//-----------------------------------

function myfun(){
    echo "My name is sumana";
}

myfun();

echo "<br/>";

function myfun1(){
    $num1 = 10;
    $num2 = 20;
    $cal = $num1+$num2;
    echo $cal;
}

myfun1(); // 30

echo "<br/>";

//---------------------------

function singlefun($name){
    echo "My name is $name";
}

singlefun("Aung Aung");

echo "<br/>";

function multifun($name,$age){
    echo "My name is $name . I am {$age} years old.";
}

multifun("Kyaw Kyaw",20); echo "<br/>";
multifun("nanda",30);

//-----------------------

echo "<br/>";

function defaultfun($name="Hla Hla"){
    echo "My name is ${name}";
}

defaultfun();  // My name is Hla Hla
defaultfun("Aye Aye"); //My name is Aye Aye

echo "<br/>";

function defaultfun1($num1=10,$num2=20,$num3=30){
    $cal = $num1+$num2+$num3;
    echo $cal;
}

defaultfun1(); //60
defaultfun1(50,10); //90
defaultfun1(70,5,15); //90

echo "<hr/>";

//-----------------------------

// Return Function 

function myreturn($num1){
    $cal = $num1 + 10;
    return $cal;
}

echo myreturn(50); //60


function returnfun1($num1){
    return $cal = $num1+10; // can't in js, direct return in the variable
}

echo returnfun1(100); //110


// without default parameter
function returnfun2($num1,$num2,$num3){
    $cal = $num1+$num2+$num3; 
    return $cal;
}

echo returnfun2(10,20,30); //60



// with default parameter
function returnfun3($num1=10,$num2=20,$num3=30){
    $cal = $num1+$num2+$num3; 
    return $cal;
}

echo returnfun3(50); //100
echo returnfun3(); //60

echo "<hr/>";

//----------------------------------

// => Dynamic Function Call 

$dyn1 = myreturn(100);
echo $dyn1; //100

$dyn2 = returnfun3();
echo $dyn2; //60

$dyn3 = "returnfun1"; //Dynamic function call
echo $dyn3; //return
echo $dyn3(100); //110

echo '<br/>';


$myfun = "returnfun3";
echo $myfun() . "<br/>";

if(function_exists($myfun)){
    echo "Yes,your variable value is already in some kind of function";
}else{
    echo "No";
}





?>