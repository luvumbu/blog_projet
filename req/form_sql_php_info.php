<?php 
 
 session_start() ; 
  
 // indicateur d'information 
 
 if(isset($_SESSION["form_sql_php_info"])){
 
 
 switch ($_SESSION["form_sql_php_info"]) {
   case "0":
     echo "Your favorite color is red!";
 
 
 
     break;
   case "1":
     echo "Connexion reussi";
  
 
 
     break;
   case "2":
     echo "Mauvais mot de passe";
  
 
     break;
 
     case "3":
       echo "Création d'un utilisateur ok";
       
       break;
 

  
 }
 
 
 }
 
 
 
 
 
 
 
 ?>
  
 
 <meta http-equiv="Refresh" content="2">
