<?php
session_start() ; 

header("Access-Control-Allow-Origin: *");
 

 
 $id_projet = $_POST["id_projet"] ; 


 echo  $id_projet ; 


require_once '../class/databaseHandler.php' ; 
require_once '../class/config.php' ; 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);

 
$sql_ = 'DELETE FROM  `projet` WHERE `id_projet` = '.$id_projet.'' ; 

$databaseHandler->action_sql($sql_) ;


?>
 
 
