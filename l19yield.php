<?php 
// echo "Hello";

// yield keyword 

function funone(){
    yield "1";
    yield "2";
    yield "3";
    yield "4";
    yield 5;
}

$numbers = funone();
foreach($numbers as $number){
    echo $number . "<br/>";
}

echo "<hr/>";

function funtwo(){
    $index = 0;

    while($index < 10){
        yield $index;
        $index++;
    }
}

$numbers = funtwo();
foreach($numbers as $number){
    echo $number . "<br/>";
}

echo "<hr/>";



// => yield with keyword
    echo "<hr/>";

    function funthree(){
        // yield from [1,2,3,4,5];

        // yield from [1,2,3,4,5];
        // yield 6;

        yield from [1,2,3,4,5];
        yield from [6,7,8,9];
        yield from [10];
    }

    $numbers = funthree();
    foreach($numbers as $number){
        echo $number . "<br/>";
    }

    echo "<hr/>";

?>