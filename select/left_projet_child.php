 <?php


    $id_sha1_projet_a = $id_sha1_projet[$a];


    $req_sql_2 = 'SELECT * FROM `projet_child` WHERE `id_sha1_parent_projet_child`  ="' . $give_url . '" ';


    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql_2, "id_projet_child");
    $id_projet_child = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql_2, "id_user_projet_child");
    $id_user_projet_child = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql_2, "id_sha1_parent_projet_child");
    $id_sha1_parent_projet_child = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql_2, "name_projet_child");
    $name_projet_child = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql_2, "statue_projet_child");
    $statue_projet_child = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql_2, "title_projet_child");
    $title_projet_child = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql_2, "visibility_1_projet_child");
    $visibility_1_projet_child = $databaseHandler->tableList_info;

    $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
    $databaseHandler->getDataFromTable($req_sql_2, "img_projet_child_src");
    $img_projet_child_src = $databaseHandler->tableList_info;





    echo '<div class="blanc">';

    for ($x = 0; $x < count($id_sha1_parent_projet_child); $x++) {

        /*
  echo    $id_projet_child[$x] ."<br/>" ; 
  echo    $id_user_projet_child[$x] ."<br/>" ; 

  echo    $id_sha1_parent_projet_child[$x] ."<br/>" ; 

  echo    $name_projet_child[$x] ."<br/>" ; 
  echo    $statue_projet_child[$x] ."<br/>" ; 
  echo    $title_projet_child[$x] ."<br/>" ; 
  echo    $visibility_1_projet_child[$x] ."<br/>" ; 
  echo    $img_projet_child_src[$x] ."<br/>" ; 
*/




        switch ($statue_projet_child[$x]) {

            case "h1":
            case "h2":
            case "h3":
            case "h4":
            case "p":


                if ($id_user == $id_user_projet[$a]) {
    ?>



                 <div style="margin-top:20px;padding:25px" class="margin_styl_1">

                     <input value="<?php echo $name_projet_child[$x] ?>" onkeyup="left_projet_child(this)" title="<?php echo  $id_projet_child[$x] ?>" id="<?php echo   $id_projet_child[$x] . "_name_projet" ?>" type="text" style="border-bottom:1px solid black;width:80%">

                     <select title="<?php echo  $id_projet_child[$x] ?>" class="form-select" aria-label="Default select example" onchange="statue_projet_child(this)">

                         <option value="<?php echo $statue_projet_child[$x] ?>" selected><?php echo $statue_projet_child[$x] ?></option>

                         <option value="h1">h1</option>
                         <option value="h2">h2</option>
                         <option value="h3">h3</option>
                         <option value="h4">h4</option>
                         <option value="h5">h5</option>
                         <option value="p">p</option>
                         <option value="a">link</option>




                     </select>
                     <br />
                     <div class="margin_styl_1 opacity_03">
                         <input value="<?php echo $title_projet_child[$x] ?>" onkeyup="left_projet_child(this)" title="<?php echo  $id_projet_child[$x] ?>" id="<?php echo   $id_projet_child[$x] . "_title_projet" ?>" type="text" style="border-bottom:1px solid rgba(0,0,0,0.4);width:80%">

                     </div>
                     <br />

                 </div>



                 <div style="margin-top:20px">
                     <div>
                         <img width="50" height="50" src="https://img.icons8.com/ios/50/image-file.png" alt="image-file" />

                     </div>
                     <img width="25" height="25" src="https://img.icons8.com/color/25/delete-forever.png" alt="delete-forever" />
                 </div>



 <?php


                } else {


                    echo '<' . $statue_projet_child[$x] . ' title="' . $title_projet_child[$x] . '"  >' . $name_projet_child[$x] . '</' . $statue_projet_child[$x] . '>';
                }

                break;
            case "list":





                break;
            case "green":
                echo "Your favorite color is green!";
                break;
        }
    }




    echo '</div>';

    ?>

 <style>
     .opacity_03 {
         opacity: 0.3;
     }

     .blanc {
         background-color: white;
     }
 </style>

 <script>
     var envoyer = false;

     function left_projet_child(_this) {



         const myTimeout_1 = setTimeout(myGreeting, 100);


         function myGreeting() {






             if (envoyer) {

                 const myTimeout_2 = setTimeout(myGreeting_2, 1000);
             }


             envoyer = false;

         }

         function myGreeting_2() {


             envoyer = true;



             var _title_projet = document.getElementById(_this.title + "_title_projet").value;
             var _name_projet = document.getElementById(_this.title + "_name_projet").value;

             console.log(_name_projet);

             console.log(_title_projet);






             var ok = new Information("../update/left_update_child.php"); // création de la classe 

             ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 

             ok.add("title_projet_child", _title_projet); // ajout de l'information pour lenvoi 
             ok.add("name_projet_child", _name_projet); // ajout de l'information pour lenvoi 


             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 


         }

     }

     function statue_projet_child(_this) {




         var ok = new Information("../update/statue_projet_child.php"); // création de la classe 

         ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 

         ok.add("statue_projet_child", _this.value); // ajout de l'information pour lenvoi 



         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 







     }
 </script>