<?php

$num1 = 100;
$num2 = 400;

function funone(){
    $GLOBALS["result"] = $GLOBALS["num1"] + $GLOBALS["num2"];
    return $GLOBALS["result"];
}

echo funone();

echo $result;
echo $GLOBALS["result"];




?>