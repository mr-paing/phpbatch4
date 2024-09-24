<?php 

// json_encode(array);

// json_decode(array);
// json_decode(array,true); | true = associative

$color = ["red","green","blue"];
var_dump($color);               // array(3) { [0]=> string(3) "red" [1]=> string(5) "green" [2]=> string(4) "blue" }

echo "<br/>";

$mycolors = json_encode($color);
echo $mycolors;             // ["red","green","blue"]  // string
var_dump($mycolors);


echo "<br/>";

$students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];
var_dump($students);        // array(3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }
echo "<br/>";
echo $students["name"] , "<br/>";           // aung aung
echo $students["age"] , "<br/>";            // 25
echo $students["city"] , "<br/>";           // yangon

$studentinfos = json_encode($students);
echo $studentinfos  , "<br/>";              // {"name":"aung aung","age":25,"city":"yangon"}
var_dump($studentinfos);                    // string(45) "{"name":"aung aung","age":25,"city":"yangon"}"

echo "<hr/>";

// can't print cuz it string
// echo $studentinfos["name"] , "<br/>";           
// echo $studentinfos["age"] , "<br/>";            
// echo $studentinfos["city"] , "<br/>"; 


// => Decode by single parameter
$studentdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentdecode = json_decode($studentdatas);
var_dump($studentdecode);               // object(stdClass)#1 (3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }


// can't print cuz it string
// echo $studentdecode["name"] , "<br/>";           
// echo $studentdecode["age"] , "<br/>";            
// echo $studentdecode["city"] , "<br/>"; 

#can print (object(stdClass) (-> object operator))

echo "<br/>";
echo $studentdecode -> name;            // aung aung
echo $studentdecode -> age;             // 25
echo $studentdecode -> city;            // yangon

echo "<br/>";

foreach($studentdecode as $key=>$value){
    echo $key . " is " . $value . "<br/>";
}



// => Decode by multi parameter
$staffdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$staffdecode = json_decode($staffdatas,true);
var_dump($staffdecode);             // array(3) { ["name"]=> string(9) "aung aung" ["age"]=> int(25) ["city"]=> string(6) "yangon" }

// can
echo $staffdecode["name"] , "<br/>";           
echo $staffdecode["age"] , "<br/>";            
echo $staffdecode["city"] , "<br/>"; 

foreach($staffdecode as $key=>$value){
    echo $key . " is " . $value . "<br/>";
}

?>