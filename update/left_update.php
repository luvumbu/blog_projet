<?php
session_start() ; 

header("Access-Control-Allow-Origin: *");
 
 


 
 $title_projet = $_POST["title_projet"] ; 
 $name_projet = $_POST["name_projet"] ; 
 

$id_projet = $_POST["id_projet"] ; 
  


 

require_once '../class/databaseHandler.php' ; 
require_once '../class/config.php' ; 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);

$sql_req = 'UPDATE `projet` SET `name_projet` = "'.$name_projet .'", `title_projet` = "'.$title_projet.'" WHERE  `id_projet` = "'.$id_projet.'"';

 
$databaseHandler->action_sql($sql_req) ;

?>
 
 
