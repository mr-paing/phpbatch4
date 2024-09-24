<?php

$males = ["aung aung","tun tun","maung maung","kyaw kyaw"];

function gender($name){
    return ("Mr. ".$name);
}

echo "<pre>". print_r(array_map("gender",$males),true) ."</pre>";


?>