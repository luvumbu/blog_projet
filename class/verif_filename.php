<?php
if(filename($filename)==1){
    require_once $filename ;
    // ajoute   $filename  puisque sa ete verifier que sa existe 
    $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 





    if($databaseHandler->verif==1){
    // Si le fichier existe 
    // tester de se connecter a la base de donne 
    $verif_data = 1;


    $databaseHandler->getTables($config_dbname);



if (!in_array($config_dbname, $databaseHandler->getListOfTables()))
  {
    unlink('class/config.php') ; 



    echo '<meta http-equiv="Refresh" content="0">' ; 
 
  }
 
     




    }
    else {
              unlink('class/config.php') ; 
?>
        <meta http-equiv="Refresh" content="0">
<?php
        }
} 


?>