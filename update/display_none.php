<?php
session_start() ; 

header("Access-Control-Allow-Origin: *");
 

 
 $id_projet = $_POST["id_projet"] ; 


 


require_once '../class/databaseHandler.php' ; 
require_once '../class/config.php' ; 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);

 


$databaseHandler->action_sql('UPDATE `projet` SET `statue_projet` = "display_none" WHERE `id_projet` = "'.$id_projet.'"') ;

?>
 
 
