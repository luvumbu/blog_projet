<?php
session_start() ; 

header("Access-Control-Allow-Origin: *");
 
 
 
 
$title_user =  $_POST["title_user"] ;
//$title_user = "title_user0." ;

//$nom_user =  "nom_user0." ;

$nom_user =  $_POST["nom_user"] ;
$description_user =  $_POST["description_user"] ;

 
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

$sql_req = 'UPDATE `'.$config_dbname.'` SET `description_user` = "'.$description_user.'", `title_user` = "'.$title_user.'", `nom_user` = "'.$nom_user.'" WHERE `id_user` = "'.$id_user.'";';

 
$databaseHandler->action_sql($sql_req) ;
 
?>
 
 
