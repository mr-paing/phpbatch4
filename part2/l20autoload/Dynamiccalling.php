<?php 

// require_once("Music.php");
// require_once("Video.php");
// require_once("gallery/Photo.php");

spl_autoload_register(function($classname){
    // echo "Loading the class = $classname <br/>";

    require_once "$classname.php";
});

$musicobj = new Music();
$musicobj->Play();

$videoobj = new Video();
$videoobj->Play();

#error = can't call
// $photoobj = new Photo();
// $photoobj->Play();

?>