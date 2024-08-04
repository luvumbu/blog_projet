<?php
session_start() ; 

header("Access-Control-Allow-Origin: *");
 
 

 $id_projet_child= $_POST["id_projet_child"] ; 
 $statue_projet_child =  $_POST["statue_projet_child"] ; 
 
 

require_once '../class/databaseHandler.php' ; 
require_once '../class/config.php' ; 




 
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);

$sql_req = "UPDATE  `projet_child` SET `statue_projet_child` = '".$statue_projet_child."' WHERE  `id_projet_child` = '".$id_projet_child."';";

 
$databaseHandler->action_sql($sql_req) ;
 
?>
 
 
