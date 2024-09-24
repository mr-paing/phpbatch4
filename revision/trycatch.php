<?php 

function mycolor($color){

    // return "I hate $color color";

    if($color !== "red"){
        throw new Exception("ooh! I hate $color color");
    }

    return "My fav color is $color color.";
}

echo mycolor("red");

echo "<hr/>";

function mynum($base,$power){

    if($power > 4){
        throw new Exception("We don't allow greater than 4");
    }

    $result = pow($base,$power);
    return $result;

}

echo mynum(2,3);
echo mynum(3,3);
echo mynum(2,4);

echo "<hr/>";

function mycolour($color){

    if($color !== "red"){
        throw new Exception("I hate $color color.");
    }
    return "My fav color is $color color.";
}

try{
    echo mycolour("blue");
}catch(Exception $e){
    echo "You should nod try with this color.";
}

echo "<hr/>";

try{
    echo mycolour("green");
}catch(Exception $e){
    echo $e;
}

echo "<hr/>";

try{
    echo mycolour("red");
}catch(Exception $e){
    echo $e->getMessage();
}


echo "<hr/>";


function mypower($base,$power){
    if($power > 7){
        throw new Exception("We don't allow over 7");
    };

    $result = pow($base,$power);
    return $result;
};

try{
    echo mypower(2,3);
}catch(Exception $e){
    echo "Please try again. " . $e->getMessage();
}


echo '<hr/>';

try{
    echo mypower(2,8);
}catch(Exception $e){
    echo "Please try again. " . $e->getMessage();
}

echo "<hr/>";

function mycalculate($base,$power){
    if($power > 3){
        throw new Exception("We don't allow over 3");
    };

    $result = pow($base,$power);
    return $result;
};

try{
    echo mycalculate(2,2);
}catch(Exception $e){
    echo 'please try again'. $e->getMessage();
}finally{
    echo "Hey what are you thinking about?";
}

?>