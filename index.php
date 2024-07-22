<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog_projet</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<body>
    <link rel="stylesheet" href="css.css">
<script src="js.js"></script>


    <?php 

$filename = 'class/config.php';  
$verif_data = 0 ;
// recherche de lelement 
require_once 'class/filename.php' ; 
require_once 'class/databaseHandler.php' ; 
require_once 'class/verif_filename.php' ; 
// toute cette partie ferifie le bon fonctionnement de l'application class/verif_filename.php
require_once 'form_data.php' ; 

if($verif_data ==1){
    ?>
    <script>
        
        

    var form_send = new Atribute("form_send");
    form_send.exe_atribute("title","form_data_2");
    form_send.exe_atribute("style","background-color:#584e80;margin-top:20px");






    

    
    
    </script>
        <?php 
}

 

 
// si la   $verif_data == 0 le fichier config est bon si non 
// si non demande de se connecter à fin de creer le fichier de configuration

 
    ?>



<script>




        var form_send = new Atribute("config_dbname");
 
 form_send.exe_atribute("style","margin-top:5px;border-radius:5px;border:1px solid rgba(0,0,0,0.1");

 form_send.exe_atribute("placeholder","Login");



 var form_send = new Atribute("config_password");

 form_send.exe_atribute("style","margin-top:5px;border-radius:5px;border:1px solid rgba(0,0,0,0.1");


 form_send.exe_atribute("placeholder","mot de passe");

</script>
 
</body>
</html>