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

        * {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
    h2 input,   h5 input{
        font-size: 1em;
        border: 1px solid rgba(0,0,0,0.001);
        width: 100%;
    }
    </style>





</body>

</html>