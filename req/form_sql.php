<?php
session_start() ; 
header("Access-Control-Allow-Origin: *");

$config_dbname = $_POST["config_dbname"] ; 
$config_password = $_POST["config_password"] ; 
$form_send = $_POST["form_send"] ; 
require_once '../class/databaseHandler.php' ; 
 
/*
if($databaseHandler->verif==1){
// Si le fichier existe 
// tester de se connecter a la base de donne 
$verif_data = 1;
}
*/

switch ($form_send) {
    case "form_data_1":
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
            $databaseHandler->set_column_types("VARCHAR(30) NOT NULL");
            $databaseHandler->set_column_types("VARCHAR(30) NOT NULL");
            $databaseHandler->set_column_types("VARCHAR(30) NOT NULL");
            $databaseHandler->set_column_types("VARCHAR(50)");
            $databaseHandler->set_column_types("TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
            $databaseHandler->add_table($config_dbname);
            $databaseHandler->action_sql("INSERT INTO `$config_dbname` (nom_user,password_user) VALUES ('$config_dbname','$config_password')") ;

        }

      break;
      case "form_data_2":

        if($databaseHandler->tableList_info[0]!=""){

            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 

            $config_password = sha1($config_password) ; 

            
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","id_user");

            $_SESSION["id_user"] =  $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","nom_user");

            $_SESSION["nom_user"]= $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","prenom_user");

            $_SESSION["prenom_user"]= $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","password_user");

            $_SESSION["password_user"]= $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","email_user");

            $_SESSION["email_user"]= $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","date_inscription_user");
            $_SESSION["date_inscription_user"]= $databaseHandler->tableList_info[0] ;

        }
        else {
      


            require_once '../class/config.php' ; 
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 

            $config_dbname_ = $_POST["config_dbname"] ; 
            $config_password_ = $_POST["config_password"] ; 



            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_password_."'  ","date_inscription_user");
            

            if( $databaseHandler->tableList_info[0]==""){
                $databaseHandler->action_sql("INSERT INTO `$config_dbname` (nom_user,password_user) VALUES ('$config_dbname_','$config_password_')") ;
            }




            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","id_user");

            $_SESSION["id_user"] =  $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","nom_user");

            $_SESSION["nom_user"]= $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","prenom_user");

            $_SESSION["prenom_user"]= $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","password_user");

            $_SESSION["password_user"]= $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","email_user");

            $_SESSION["email_user"]= $databaseHandler->tableList_info[0] ;
            $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
            $databaseHandler->getDataFromTable("SELECT * FROM `$config_dbname` WHERE `nom_user`='".$config_dbname_."' AND `password_user`='".$config_password_."'","date_inscription_user");
            $_SESSION["date_inscription_user"]= $databaseHandler->tableList_info[0] ;



            
 

 


        }

      break;
   
  }





 
?>