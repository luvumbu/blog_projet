<?php 
session_start() ; 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blog_projet</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<body>
    <link rel="stylesheet" href="css.css">
<script src="js.js"></script>
<div id="form_sql_php_info"></div>
<?php 
$filename = 'class/config.php';  
$verif_data = 0 ;
// recherche de lelement 
require_once 'class/filename.php' ; 
require_once 'class/databaseHandler.php' ; 
require_once 'class/verif_filename.php' ; 
// toute cette partie ferifie le bon fonctionnement de l'application class/verif_filename.php
 if(isset($_SESSION["nom_user"] )) {
    require_once "select/login.php" ; 
}
    else {
        require_once 'select/form_data.php' ; 
    }


    if($verif_data ==1){



        if(!isset($_SESSION["nom_user"] ))
        {
       ?>
       
       <script>
       
           
           var form_send = new Atribute("config_dbname");
           form_send.exe_atribute("style","margin-top:5px;border-radius:5px;border:1px solid rgba(0,0,0,0.1");
           form_send.exe_atribute("placeholder","Login");
           var form_send = new Atribute("config_password");
           form_send.exe_atribute("style","margin-top:5px;border-radius:5px;border:1px solid rgba(0,0,0,0.1");
           form_send.exe_atribute("placeholder","mot de passe");
       
       </script>
       <?php 
        }

        
        ?>
        <script>  
        var form_send = new Atribute("form_send");
        form_send.exe_atribute("title","form_data_2");
        form_send.exe_atribute("style","background-color:#584e80;");
       </script>
            <?php 
    }

// si la   $verif_data == 0 le fichier config est bon si non 
// si non demande de se connecter à fin de creer le fichier de configuration
?>
<?php 


?>



 <style>
        #form_sql_php_info{
        text-align: center;
  
      
    }
 </style>

 
 


</body>
</html>