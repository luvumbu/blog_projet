<?php 


 

 

 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `information_user` WHERE 1 LIMIT 1","information_user_login");

?>
 