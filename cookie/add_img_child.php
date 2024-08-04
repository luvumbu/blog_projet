<?php
session_start();

header("Access-Control-Allow-Origin: *");
 
 
$_SESSION["id_projet_child"] = $_POST["id_projet_child"] ; 

$_SESSION["id_user_projet_child"] = $_POST["id_user_projet_child"] ; 


$_SESSION["add_img_child_cookie"] = "0" ; 

?>