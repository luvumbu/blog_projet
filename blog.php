<?php
session_start();
require_once 'class/filename.php';
require_once 'class/databaseHandler.php';
require_once 'class/config.php';
require_once 'class/verif_filename.php';

 


?>
<!DOCTYPE html>
<html>
<script src="../js.js"></script>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <style>

    </style>
</head>

<body>
    <link rel="stylesheet" href="../css/blog.css">


    <div class="row">
        <div class="leftcolumn">
            <?php

            require_once 'select/left_blog.php';
            ?>
        </div>
        <div class="rightcolumn">
            <?php

            require_once 'select/right_blog.php';
            ?>
        </div>
    </div>

    <div class="footer">
        <h2>Footer</h2>
    </div>

</body>

</html>

 