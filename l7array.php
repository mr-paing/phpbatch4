<?php

// =>Arrays 
// (i) Indexed Array (Manual Array)
// (ii) Associative Array 
// (iii) Multidimentional Array 

// (i) Indexed Aray (Manual Array)
$names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun");
// echo $names; //Array  , Error
// print $names; //Array  , Error

echo count($names); //5
var_dump($names); //array(5) { [0]=> string(9) "aung aung" [1]=> string(11) "maung maung" [2]=> string(7) "zaw zaw" [3]=> string(9) "kyaw kyaw" [4]=> string(7) "tun tun" }
echo "<br/>";
print_r($names,false); //Array ( [0] => aung aung [1] => maung maung [2] => zaw zaw [3] => kyaw kyaw [4] => tun tun )
echo "<br/>";

$colors = ["red","blue","tomato","black","white"];
echo count($colors);
print_r($colors,false); //default is false
echo "<pre>".print_r($colors,true)."</pre>"; // true used for to know html code

$colors[6] = "gray";
$colors[7] = "stone";
$colors[8] = "skyblue";
$colors[0] = "voilet";

echo "<pre>".print_r($colors,true)."</pre>";
echo count($colors); //8


// .........................................
// (ii) Associative Array 
$news = array("pone"=>"this is post one","ptwo"=>"This is post two","pthree"=>"This is post three");
echo count($news); //
var_dump($news);

$medias = [
    "pone"=>"this is post one",
    "ptwo"=>"This is post two",
    "pthree"=>"This is post three"
];

echo "<br/>";
echo count($medias);
echo "<pre>".print_r($medias,true)."</pre>";
var_dump($medias);

$medias["pfour"] = "this is post four";
$medias["pthree"] = "this is new post three";

echo count($medias);
echo "<br/>";
var_dump($medias);

echo "<br/>";

echo "i like this post, so post title is ".$medias["pthree"];


//..................................................................


//(iii) Mulitdimensional Aray (Arrays contains one or more arrays)

$paints = array(
    array("red","green","blue"),
    array("pen","pencili","ruler"),
    array("paper","plastic")
);
echo "<br/>";
echo count($paints); //3
var_dump($paints);

$maincolors = [
    ["red","green","blue"],
    ["pen","pencili","ruler"],
    ["paper","plastic"]
];

echo "<br/>";
echo count($maincolors); //3
var_dump($maincolors);

echo $maincolors[0][0];//red
echo $maincolors[1][2]; //ruler
echo $maincolors[2][1]; //plastic




$persons = array(
    array("name"=>"aung aung","age"=>20),
    array("name"=>"su su","age"=>18),
    array("name"=>"nu nu","age"=>23)
);

$vipperson = [
    ["name"=>"aung aung","age"=>20],
    ["name"=>"su su","age"=>18],
    ["name"=>"nu nu","age"=>23]
];
echo "<br/>";
echo count($vipperson); //3
var_dump($vipperson);

echo "<br/>";
echo ($maincolors[0]["name"]); //3
vecho ($maincolors[0]["age"]);

echo "<hr/>";
echo ($maincolors[2]["name"]); //3
echo ($maincolors[1]["age"]);















?>