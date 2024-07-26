<?php 



$id_user = $_SESSION["id_user"] ; 
 
 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","id_projet");
 $id_projet = $databaseHandler->tableList_info; 

 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","id_user_projet");
 $id_user_projet = $databaseHandler->tableList_info; 
 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","id_sha1_projet");
 $id_sha1_projet = $databaseHandler->tableList_info; 
 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","name_projet");
 $name_projet = $databaseHandler->tableList_info; 
 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","title_projet");
 $title_projet = $databaseHandler->tableList_info; 
 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","description_projet");
 $description_projet = $databaseHandler->tableList_info; 
 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","visibility_1_projet");
 $visibility_1_projet = $databaseHandler->tableList_info; 
 
 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","visibility_2_projet");
 $visibility_2_projet = $databaseHandler->tableList_info; 
 

 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","img_projet_src");
 $img_projet_src = $databaseHandler->tableList_info; 
 

 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","img_projet_visibility");
 $img_projet_visibility = $databaseHandler->tableList_info; 
 
 $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
 $databaseHandler->getDataFromTable("SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' ORDER BY `projet`.`id_projet` DESC ","date_inscription_projet");
 $date_inscription_projet = $databaseHandler->tableList_info; 
 


 $somme =  count($databaseHandler->tableList_info)  ; 



 for($a = 0 ; $a < $somme ; $a ++ ) {
?>


<div class="card">
      <h2><input type="text" onkeyup="left_action(this)" id="<?php echo $id_projet[$a]."_name_projet" ?>" title="name_projet" placeholder="TITLE HEADING" value="<?php echo  $name_projet[$a] ?>"></h2>
      <h5><input type="text" onkeyup="left_action(this)" id="<?php echo $id_projet[$a]."_title_projet" ?>"    placeholder="Title description, Dec 7, 2017" value="<?php echo  $title_projet[$a] ?>"></h5>
     

      <?php 

  if($img_projet_src[$a]=="") {
echo  ' <div class="fakeimg" style="height:200px;">Image</div>' ; 
  }
        ?>
 
 <h2><input type="text" placeholder="TITLE HEADING" onkeyup="left_action(this)" id="<?php  echo $id_projet[$a].'_description_projet'?>" value="<?php echo $description_projet [$a] ?>"></h2>



      <img width="25" height="25" src="https://img.icons8.com/ios/25/plus--v1.png" alt="plus--v1"/>
      <img width="25" height="25" src="https://img.icons8.com/ios/25/hydrogen.png" alt="hydrogen"/>
      <img width="25" height="25" src="https://img.icons8.com/material-outlined/25/sound-recording-copyright--v1.png" alt="sound-recording-copyright--v1"/>
      <img width="25" height="25" src="https://img.icons8.com/ios/25/image-file.png" alt="image-file"/>
      <img width="25" height="25" src="https://img.icons8.com/ios/25/bulleted-list.png" alt="bulleted-list"/>
      
    </div>
<?php 
 }
/*
if(isset($_SESSION["options"])){
    echo $_SESSION["_this_innerHTML"] ; 
}
    */
?>

    <!--
    <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
-->
 
 



 