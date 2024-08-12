<?php
session_start() ; 

header("Access-Control-Allow-Origin: *");
 
 echo "ook" ; 
 
 
$id_social_media =  $_POST["id_social_media"] ;
//$title_user = "title_user0." ;

//$nom_user =  "nom_user0." ;

$name_social_media =  $_POST["name_social_media"] ;
 
 
require_once '../class/databaseHandler.php' ; 
require_once '../class/config.php' ; 
 
$id_user =  $_SESSION["id_user"];



function stringToAscii($input) {
    $asciiArray = [];
    for ($i = 0; $i < strlen($input); $i++) {
        $asciiArray[] = ord($input[$i]);
    }
    return $asciiArray;
}

// Exemple d'utilisation



/*
 
$title_projet_child = stringToAscii($title_projet_child);
$title_projet_child =    implode(", ", $title_projet_child);

$name_projet_child = stringToAscii($name_projet_child);
$name_projet_child =    implode(", ", $name_projet_child);
*/


 


 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);

$sql_req = 'UPDATE `social_media` SET `name_social_media` = "'.$name_social_media.'"  WHERE `id_social_media` = "'.$id_social_media.'";';

 
$databaseHandler->action_sql($sql_req) ;
 
?>
 
 
