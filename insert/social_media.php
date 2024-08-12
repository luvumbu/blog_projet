<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
 


/*
$_this_innerHTML =$_POST["_this_innerHTML"] ;
 
$id_user = $_SESSION["id_user"] ;
 

$_SESSION["options"] = time() ; 
 
*/
$t = time() ;

echo $t ; 
 

require_once '../class/databaseHandler.php' ;
require_once '../class/config.php' ; 


$id_user= $_SESSION["id_user"];

 


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `social_media` (id_sha1_social_media,id_user_social_media) VALUES ('$t','$id_user')") ;
 
?>