<?php 

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
    $config_password_ = sha1($config_password_)  ;  
    $databaseHandler->getDataFromTable('SELECT * FROM '.$config_dbname.' WHERE `nom_user`="'.$config_dbname_.'" ',"id_user");
    //$databaseHandler->getDataFromTable('SELECT * FROM '.$config_dbname.' WHERE `nom_user`="'.$config_dbname_.'" AND `password_user` ="'.$config_password_.'"',"id_user");
 


/*
 
    $config_dbname_
    $config_password_
*/


 

if($databaseHandler->tableList_info[0]!=""){

    $_SESSION["form_sql_php_info"] = "0" ; 


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password); 
    $databaseHandler->getDataFromTable('SELECT * FROM '.$config_dbname.' WHERE `nom_user`="'.$config_dbname_.'" AND `password_user` ="'.$config_password_.'"',"id_user");
    $databaseHandler->tableList_info[0] ; 


    if($databaseHandler->tableList_info[0]!=""){

                      

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

                        $_SESSION["form_sql_php_info"] = "1" ; 


    }
    else{
                $_SESSION["form_sql_php_info"] = "2" ; 
    }

 

  
}
else {
    $databaseHandler->action_sql("INSERT INTO `$config_dbname` (nom_user,password_user) VALUES ('$config_dbname_','$config_password_')") ;





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


    $_SESSION["form_sql_php_info"] = "3" ; 
}

?>