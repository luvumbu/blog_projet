<?php 

$databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
if($databaseHandler->verif==1){


    $nom_file = "../class/config.php";

    $d ="\n";
    $texte = "<?php".$d;

  
    $texte =$texte.'$config_dbname="'.$config_dbname.'";'.$d;
    $texte =$texte.'$config_password="'.$config_password.'";'.$d;
    $texte =$texte.'?>'.$d;



    // création du fichier
    $f = fopen($nom_file, "x+");
    // écriture
    fputs($f, $texte );
    // fermeture
    fclose($f);






    $databaseHandler->set_column_names("id_user");
    $databaseHandler->set_column_names("nom_user");
    $databaseHandler->set_column_names("prenom_user");
    $databaseHandler->set_column_names("password_user");
    $databaseHandler->set_column_names("email_user");
    $databaseHandler->set_column_names("date_inscription_user");
    $databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
    $databaseHandler->set_column_types("VARCHAR(100) NOT NULL");
    $databaseHandler->set_column_types("VARCHAR(100) NOT NULL");
    $databaseHandler->set_column_types("VARCHAR(100) NOT NULL");
    $databaseHandler->set_column_types("VARCHAR(100)");
    $databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
    $databaseHandler->add_table($config_dbname);
    $databaseHandler->action_sql("INSERT INTO `$config_dbname` (nom_user,password_user) VALUES ('$config_dbname','$config_password_')") ;

}


?>