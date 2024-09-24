<?php

$getdate = getdate();
// var_dump($getdate);

function caldate($mycal){
    // return $cal = $mycal - ;
    $getdate = getdate();
    return $mydate = $mycal - $getdate['yday'];
}

echo caldate(360);

?>