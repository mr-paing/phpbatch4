<?php 

ini_set('display_errors',1);

require_once("Music.php");
require_once("Video.php");
require_once("gallery/Photo.php");

$musicobj = new Music();
$musicobj->Play();

$videoobj = new Video();
$videoobj->Play();

$photoobj = new Photo();
$photoobj->Play();

?>