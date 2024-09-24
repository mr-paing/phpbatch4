<?php
$fullname = "U Kyaw Kyaw";
$job = "Developer";

echo $fullname; // U Kyaw Kyaw
print $job; // Developer

echo "$fullname"; // U Kyaw Kyaw
print '$job'; // $job

echo "My name is $fullname"; 
echo 'My name is $fullname';
echo "My name is ${fullname}";
echo "My name is {$fullname}";
echo `My name is {$fullname}`;
echo `My name is ${fullname}`;

echo "<br/>";

echo "He\'s my father , he is a $job" , "<br/>"; // He\'s my father , he is a Developer
echo 'He\'s my father , he is a $job' , "<br/>"; // He's my father , he is a $job
echo 'He\'s my father , he is a \$job' , "<br/>"; // He's my father , he is a \$job
echo "He\'s my father , he is a \${job}" , "<br/>"; // He\'s my father , he is a ${job}
echo "He\'s my father , he is a \{$job}" , "<br/>"; // He\'s my father , he is a \{Developer}
echo "He\'s my father , he is a {\$job}" , "<br/>"; // He\'s my father , he is a {$job}


echo "<br/>";

// $gender = echo "Female"; //error 
$nation = print "burma <br/>"; // burma

// Concat (.)

$firstname = "Aung";
$lastname = "kyaw kyaw";

echo $firstname.$lastname;
echo "<br/>";
echo $firstname." ".$lastname;


// Comments 
    # Single line Comment 

    /*
    Multi Line Comment 
        comment 1
        comment 2
        comment 3
    
    */







?>