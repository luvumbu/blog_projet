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
    ?>
    <style>
        #form_sql_php_info {
            text-align: center;


        }
    </style>





</body>

</html>