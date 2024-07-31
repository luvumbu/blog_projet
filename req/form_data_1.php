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
    $databaseHandler->set_column_names("id_sha1_user");

    $databaseHandler->set_column_names("id_parent_user");
    $databaseHandler->set_column_names("description_user");
    $databaseHandler->set_column_names("title_user");
    $databaseHandler->set_column_names("img_user");



    $databaseHandler->set_column_names("nom_user");
    $databaseHandler->set_column_names("prenom_user");
    $databaseHandler->set_column_names("password_user");
    $databaseHandler->set_column_names("email_user");


    $databaseHandler->set_column_names("date_inscription_user");
    $databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");

    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");

    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");



    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
    $databaseHandler->add_table($config_dbname);
    $config_password_ = sha1($config_password_) ; 
    $databaseHandler->action_sql("INSERT INTO `$config_dbname` (nom_user,password_user) VALUES ('$config_dbname','$config_password_')") ;




    $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 


    $databaseHandler->set_column_names("id_projet");
    $databaseHandler->set_column_names("id_user_projet");

    $databaseHandler->set_column_names("id_sha1_projet");

    $databaseHandler->set_column_names("name_projet"); 
    $databaseHandler->set_column_names("statue_projet"); 

    $databaseHandler->set_column_names("title_projet"); 
    $databaseHandler->set_column_names("description_projet"); 


    $databaseHandler->set_column_names("password_projet");
    $databaseHandler->set_column_names("visibility_1_projet");
    $databaseHandler->set_column_names("visibility_2_projet");
    $databaseHandler->set_column_names("img_projet_src");
    $databaseHandler->set_column_names("img_projet_visibility");



    $databaseHandler->set_column_names("date_inscription_projet");

    $databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
 
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");

    $databaseHandler->set_column_types("LONGTEXT NOT NULL");



    $databaseHandler->set_column_types("LONGTEXT NOT NULL");

    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");



    $databaseHandler->set_column_types("LONGTEXT");
    $databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
    $databaseHandler->add_table("projet");
 


 









    $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 


    $databaseHandler->set_column_names("id_projet_child");
    $databaseHandler->set_column_names("id_user_projet_child");

    $databaseHandler->set_column_names("id_sha1_projet_child");
    $databaseHandler->set_column_names("id_sha1_parent_projet_child");


    $databaseHandler->set_column_names("name_projet_child"); 
    $databaseHandler->set_column_names("statue_projet_child"); 

    $databaseHandler->set_column_names("title_projet_child"); 
    $databaseHandler->set_column_names("description_projet_child"); 


    $databaseHandler->set_column_names("password_projet_child");
    $databaseHandler->set_column_names("visibility_1_projet_child");
    $databaseHandler->set_column_names("visibility_2_projet_child");
    $databaseHandler->set_column_names("img_projet_child_src");
    $databaseHandler->set_column_names("img_projet_child_visibility");



    $databaseHandler->set_column_names("date_inscription_projet_child");

    $databaseHandler->set_column_types("INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY");
 
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");

    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");

    $databaseHandler->set_column_types("LONGTEXT NOT NULL");



    $databaseHandler->set_column_types("LONGTEXT NOT NULL");

    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");
    $databaseHandler->set_column_types("LONGTEXT NOT NULL");



    $databaseHandler->set_column_types("LONGTEXT");
    $databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
    $databaseHandler->add_table("projet_child");
 
    

}


?>