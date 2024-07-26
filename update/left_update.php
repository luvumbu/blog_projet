<?php
session_start() ; 

header("Access-Control-Allow-Origin: *");
 

 
 $name_projet = $_POST["name_projet"] ; 
 $title_projet = $_POST["title_projet"] ; 
$description_projet = $_POST["description_projet"] ; 

$id_projet = $_POST["id_projet"] ; 
echo $name_projet ; 
echo $title_projet ;  
echo $description_projet ; 


 


require_once '../class/databaseHandler.php' ; 
require_once '../class/config.php' ; 

$databaseHandler = new DatabaseHandler("root", "root");
$databaseHandler->action_sql('UPDATE  `projet` SET `name_projet` =  "'.$name_projet.'",`title_projet` =  "'.$title_projet.'",`description_projet` =  "'.$description_projet.'" WHERE  `id_projet` = '.$id_projet.'') ;

?>
 
 
