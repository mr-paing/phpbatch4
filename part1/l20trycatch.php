<?php 

# Note :: please try on one of the phpcompiler in website.

function mycolor($color){

    if($color !== "red"){
        // return "Ohh! I hate $color color";

                // Exception(Message);
        throw new Exception("Ohh! I hate $color color"); #this code does not work & down server on xampp server , but it work well on the website phpcompiler
    }

    return "Yap! My fav color is $color";
}

echo mycolor("blue");


function mynum($base,$power){

    if($power > 4){
        throw new Exception("We don't allow over 5 power");
    }

    $result = pow($base,$power);
    return $result;
}

echo mynum(2,3); //8
echo mynum(2,4); //16
echo mynum(2,5); // Fatal error: Uncaught Exception: We don't allow over 5 power




# => try....catch Statement 

    // try{
        // code to be executed
    // }catch(Exception $e){
        // code to exception is catched
    // }



    function mycolour($color){
        if($color !== "red"){
            throw new Exception("Ohh! I hate $color color");
        }
        return "Yep! My fav color is $color";
    }

    // echo mycolor("red");

    try{
        echo mycolour("black");
    }catch(Exception $e){
        echo "You should not try with this color";  // You should not try with this color
    }

#or

    try{
        echo mycolour("blue");
    }catch(Exception $e){
        echo $e->getMessage();   // Ohh! I hate blue color
    }

#or

    try{
        echo mycolour("red");
    }catch(Exception $e){
        echo $e->getMessage();   // Yep! My fav color is red
    }


#or

    try{
        echo mycolour("blue");
    }catch(Exception $e){
        echo $e;   // Exception: Ohh! I hate blue color in /tmp/hHIpnS7LAh.php:4
    }



    function mypower($base,$power){

        if($power > 6){
            throw new Exception("We don't allow over 6 power");
        }
    
        $result = pow($base,$power);
        return $result;
    }
    
    // echo mypower(2,3); //8

    try{
        echo mypower(2,7);
    }catch(Exception $e){
        echo "You should not over. ". $e->getMessage(); //You should not over. We don't allow over 6 power
    }


    try{
        echo mypower(2,4);
    }catch(Exception $e){
        echo "You should not over. ". $e->getMessage(); // 16
    }




# => try...catch...finally Statement 
        
        // try{
        //     code to be executed
        // }catch(Exception $e){
        //     code to exception is catched
        // }finally{
        //     code that always runs regardless of weather an exception was catch or not !
        // }

        function mycalculate($base,$power){

            if($power > 3){
                throw new Exception("We don't allow over $power");
            }

            $result = pow($base,$power);
            return $result;
        }

        // echo mycalculate(2,4);

        try{
            echo mycalculate(2,4);
        }catch(Exception $e){
            echo "You should not over . " . $e->getMessage(); // You should not over . We don't allow over 4Hay there!! I am joker
        }finally{
            echo "Hay there!! I am joker";
        }


        try{
            echo mycalculate(2,2); // 4 Hay there!! I am joker
        }catch(Exception $e){
            echo "You should not over . " . $e->getMessage(); // You should not over . We don't allow over 4Hay there!! I am joker
        }finally{
            echo " Hay there!! I am joker";
        }


?>

