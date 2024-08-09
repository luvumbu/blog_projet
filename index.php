<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blog_projet</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="icon" type="image/x-icon" href="../../src_/uploads/1/1722457830590.jpg">
</head>

<body>
    <link rel="stylesheet" href="css/css.css">
    <script src="js.js"></script>
    <div id="form_sql_php_info"></div>
    <?php
    $filename = 'class/config.php';
    $verif_data = 0;
    // recherche de lelement 
    require_once 'class/filename.php';
    require_once 'class/databaseHandler.php';
    require_once 'class/verif_filename.php';
    // toute cette partie ferifie le bon fonctionnement de l'application class/verif_filename.php
    if (isset($_SESSION["nom_user"])) {
        require_once "select/login.php";
        
    } else {
        require_once 'select/form_data.php';
 

    }


    require_once 'select/index_all.php';
  
    ?>
 




</body>


<style>
    #form{
        width: 400px;
        margin: auto;
        margin-top: 100px;
        background-color: white;
        padding: 20px;
        margin-bottom: 78px;
    }
   .spatio_{
 
  margin-bottom: 10px;
    }
    #form input{
        width: 90%;
        margin-top: 10px;
        padding: 10px;
        margin: 10px;
        border-radius: 7px;

    }
    .btn_black{
        background-color: black ; 
        color: #f1f1f1;
        width: 95%;
        margin-left: 10%;
        border-radius: 3px;
        margin: 10px;
padding: 7px;
        text-align: center;
    }
    body{
        background-color: #f1f1f1;
    }
</style>

<link rel="stylesheet" href="select/left.css">
</html>