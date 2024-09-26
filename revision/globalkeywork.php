<?php 

$num1 = 100;
$num2 = 200;

function globalkeywork(){
    

    $GLOBALS["result"] = $GLOBALS["num1"] + $GLOBALS["num2"];
    return $result;
};

// echo globalkeywork();
echo globalkeywork();
// echo $result;


?>