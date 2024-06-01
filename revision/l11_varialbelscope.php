<?php 
// -> Global Variable Scope 
// -> Local Variable Scope 
// -> Static Variable Scope


$num1 = 100;

function funone(){
    global $num1 , $num2;
    $num2 = 200;
    $num3 = $num1 + $num2;
    echo $num3;

}

funone();
echo "<br/>";
echo $num1;
echo "<br/>";
echo $num2;


echo "<hr/>";

$val1 = 100;
$val2 = 200;
function myfunone(){
    
    $GLOBALS['val3'] = $GLOBALS['val1'] + $GLOBALS['val2'];
    echo $GLOBALS['val3'];
}

myfunone();
echo $val3;

echo "<hr/>";


$x = 100;
function funtwo(){
    global $x;

    $x++;
    echo $x;
}

funtwo();
funtwo();
funtwo();
funtwo();
funtwo();

echo "<hr/>";

function funthree(){
    static $y = 200;

    $y++;
    echo $y;
};

funthree();
funthree();
funthree();
funthree();
funthree();


echo "<hr/>";

$num4 = 400;
function funfour($num4){
    $num4 = 4000;

    echo $num4;
}

echo $num4;
echo "<br/>";
funfour($num4);
echo "<br/>";
echo $num4;

echo "<hr/>";

$num5 = 500;
function funfixth(&$num5){
    $num5 = 5000;

    echo $num5;
}

echo $num5;
echo "<br/>";
funfixth($num5);
echo "<br/>";
echo $num5;
echo "<br/>";
echo $num5;
echo "<br/>";
echo $num5;


?>