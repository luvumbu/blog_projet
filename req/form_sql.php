<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");

$config_dbname = $_POST["config_dbname"] ; 
$config_password = $_POST["config_password"] ; 

$config_dbname_ = $_POST["config_dbname"] ; 
$config_password_ = $_POST["config_password"] ; 

 
$form_send = $_POST["form_send"] ; 
require_once '../class/databaseHandler.php' ;  



 
/*
if($databaseHandler->verif==1){
// Si le fichier existe 
// tester de se connecter a la base de donne 
$verif_data = 1;
}
*/



switch ($form_send) {
    case "form_data_1":
   require_once 'form_data_1.php' ;  // demande de validation avec la bdd 

      break;
    case "form_data_2": // deuxieme formulaire avant la validation de connexion avec la bdd 
     require_once "../class/config.php" ; 
     require_once 'form_data_2.php' ; 



  

      break;
   
  }





 
?>