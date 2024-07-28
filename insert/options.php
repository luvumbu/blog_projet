<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
 
$_this_innerHTML =$_POST["_this_innerHTML"] ;
 
$id_user = $_SESSION["id_user"] ;
 

$_SESSION["options"] = time() ; 
 

$t = time() ;


require_once '../class/databaseHandler.php' ;
require_once '../class/config.php' ; 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `projet` (id_sha1_projet,id_user_projet) VALUES ('$t','$id_user')") ;

?>