<?php 

$colors = ['green','tomato','grey','red'];

for($x = 0; $x < count($colors); $x++){
    echo "Loop by forloop index array : key is = ". $x . " value is = ". $colors[$x]. "<br/>";
}

echo "<hr/>";

foreach($colors as $key=>$color){
    echo "Loop by foreach index array : key is = ".$key." value is = ".$color."<br/>";
};

echo "<hr/>";

$x = 0;
while($x < count($colors)){
    echo "Loop by whileloop index array : key is = ".$x." value is = ".$colors[$x]."<br/>";
    $x++;
}

echo "<hr/>";

$y = 0;
do{
    echo "Loop by dowhileloop index array : key is = ".$y." value is = ".$colors[$y]."<br/>";

    $y++;
}while($y < count($colors));


echo "<hr/>";





$bio = ['name'=>'kyaw kyaw','age'=>20,'job'=>'developer'];

$biokey = array_keys($bio);
for($x = 0; $x < count($bio);$x++){
    // echo $biokey[$x]; //key
    // echo $bio[$biokey[$x]]; // value

    echo "Loop by forloop associative array : key is = ".$biokey[$x]." value is = ".$bio[$biokey[$x]]."<br/>";
}

echo "<hr/>";

foreach($bio as $key=>$value ){
    // echo $key; //key
    // echo $value;

    echo "Loop by foreachloop associative array : key is = ".$key." value is = ".$value."<br/>";
}


echo "<hr/>";

$val1 = 0;
while($val1 < count($bio)){

    // echo $biokey[$val1]; // key
    // echo $bio[$biokey[$val1]]; // value

    echo "Loop by whileloop associative array : key is = ".$biokey[$val1]." value is = ".$bio[$biokey[$val1]]."<br/>";

    $val1++;
}

echo "<hr/>";

$val2 = 0;
do{

    // echo $biokey[$val2]; // key
    // echo $bio[$biokey[$val2]]; // value

    echo "Loop by dowhileloop associative array : key is = ".$biokey[$val2]." value is = ".$bio[$biokey[$val2]]."<br/>";

    $val2++;
}while($val2 < count($bio));


echo "<hr/>";



$employees = [
    ['name'=>'susu','age'=>20,'city'=>'yangon'],
    ['blue','tomato','grey','green'],
    ['job'=>'developer','gender'=>'female','merritalstatus'=>"single"]
];


$employeekeyone = array_keys($employees);

for($x = 0; $x < count($employees);$x++){
    $employeekeytwo = array_keys($employees[$x]);

    for($y = 0; $y < count($employeekeytwo); $y++){
        // echo $employeekeytwo[$y]; // key
        // echo $employees[$employeekeyone[$x]][$employeekeytwo[$y]]; //value

        echo "Loop by forloop multidimensional array : key is = ".$employeekeytwo[$y]." value is = ".$employees[$employeekeyone[$x]][$employeekeytwo[$y]]."<br/>";
    }
}

echo "<hr/>";

foreach($employees as $index=>$employee){
    foreach($employee as $key=>$value ){
        // echo $key; // key
        // echo $value;

        echo "Loop by foreachloop multidimensional array : key is = ".$key." value is = ".$value."<br/>";
    }
}


echo "<hr/>";


$val3 = 0;
while($val3 < count($employees)){

    $employeekeytwo = array_keys($employees[$val3]);

    $val4 =0;
    while($val4 < count($employeekeytwo)){

        // echo $employeekeytwo[$val4]; // key
        // echo $employees[$employeekeyone[$val3]][$employeekeytwo[$val4]]; // value

        echo "Loop by whileloop multidimensional array : key is = ".$employeekeytwo[$val4]." value is = ".$employees[$employeekeyone[$val3]][$employeekeytwo[$val4]]."<br/>";

        $val4++;
    }

    $val3++;
}


echo "<hr/>";

$i = 0;
do{
    $employeekeytwo = array_keys($employees[$i]);
    

    $j = 0;
    do{
        // echo $employeekeytwo[$j]; // key
        // echo $employees[$employeekeyone[$i]][$employeekeytwo[$j]];


        echo "Loop by dowhileloop multidimensional array : key is = ".$employeekeytwo[$j]." value is = ".$employees[$employeekeyone[$i]][$employeekeytwo[$j]]."<br/>";

        $j++;
    }while($j < count($employeekeytwo));

    $i++;

}while($i < count($employees));










echo "<hr/>";
echo "<br/>";   

















?>