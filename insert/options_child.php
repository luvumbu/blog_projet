<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");
 


/*
$_this_innerHTML =$_POST["_this_innerHTML"] ;
 
$id_user = $_SESSION["id_user"] ;
 

$_SESSION["options"] = time() ; 
 
*/
$t = time() ;


require_once '../class/databaseHandler.php' ;
require_once '../class/config.php' ; 


$id_user= $_SESSION["id_user"];

$id_sha1_parent_projet_child =$_POST["id_sha1_parent_projet_child"]; 
$statue_projet_child = $_POST["statue_projet_child"] ; 


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->action_sql("INSERT INTO `projet_child` (id_sha1_projet_child,id_user_projet_child,id_sha1_parent_projet_child,statue_projet_child) VALUES ('$t','$id_user','$id_sha1_parent_projet_child','$statue_projet_child')") ;

?>