 <?php


    $id_sha1_projet_a = $id_sha1_projet[$a];


    $req_sql_2 = 'SELECT * FROM `projet_child` WHERE `id_sha1_parent_projet_child`  ="' . $give_url . '"  ORDER BY `projet_child`.`id_projet_child` ASC ';


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


  
    function asciiToString($asciiString) {
        // Supprimer les espaces inutiles et séparer les valeurs par des virgules
        $asciiArray = array_map('trim', explode(',', $asciiString));
        
        $string = '';
        foreach ($asciiArray as $ascii) {
            // Assurez-vous que l'entrée est un nombre entier
            if (is_numeric($ascii)) {
                $string .= chr((int)$ascii);
            }
        }
        return $string;
    }
    
    // Exemple d'utilisation

 
 
    


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


              
                    $name_projet_child[$x] = asciiToString($name_projet_child[$x]);
                    $title_projet_child[$x] = asciiToString($title_projet_child[$x]);



    ?>



                 <div style="margin-top:20px;padding:25px" class="margin_styl_1">
 
<textarea  onkeyup="left_projet_child(this)" title="<?php echo  $id_projet_child[$x] ?>" id="<?php echo   $id_projet_child[$x] . "_name_projet" ?>" type="text" style="border-bottom:1px solid black;width:80%"><?php echo $name_projet_child[$x] ?></textarea>
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



                 <div class="remove_">
                     <div>
                         <img onclick="remove_(this)" title="<?php echo $id_projet_child[$x]  ?>" width="25" height="25" src="https://img.icons8.com/ios-filled/25/delete-forever.png" alt="delete-forever" />
                         <img onclick="remove_projet_child(this)" title="<?php echo $id_projet_child[$x]  ?>" class="display_none" id="<?php echo $id_projet_child[$x] . "_remove"  ?>" width="25" height="25" src="https://img.icons8.com/color/25/delete-forever.png" alt="delete-forever" />
                     </div>
                 </div>



             <?php


                } else {


                    echo '<' . $statue_projet_child[$x] . ' title="' . $title_projet_child[$x] . '"  >' . $name_projet_child[$x] . '</' . $statue_projet_child[$x] . '>';
                }

                break;
            case "list":





                break;
            case "img":


                if ($img_projet_child_src[$x] != "") {


                    if ($id_user == $id_user_projet[$a]) {

                        ?>

                        <div class="div_img">
                            <img src="<?php echo '../src_/' . $img_projet_child_src[$x] ?>" class="<?php echo $id_projet[$a] ?>" onclick="add_img_child(this)" title="<?php echo $id_projet_child[$x]  ?>"  alt="" srcset="">
                             <input type="text"  class='alt_class'    value="<?php echo  $title_projet_child[$x]?>"   title="<?php echo  $id_projet_child[$x]?>" id="<?php echo  'alt_img'.$id_projet_child[$x]?>" onkeyup="alt_img(this)" placeholder="ALT IMG ICI">
                        </div>
                    <?php

                    }
                    else{
                        ?>

                        <div class="div_img">
                            <img  alt="<?php echo $title_projet_child[$x] ?>" src="<?php echo '../src_/' . $img_projet_child_src[$x] ?>" class="<?php echo $id_projet[$a] ?>"     >
                        </div>
                    <?php
                    }
  
                }
                else {


                    if ($id_user == $id_user_projet[$a]) {

                        ?>
                        <div class="div_img">
       
                            <img class="<?php echo $id_projet[$a] ?>" onclick="add_img_child(this)" title="<?php echo $id_projet_child[$x]  ?>" src="https://img.freepik.com/photos-gratuite/jeux-olympiques-paris-2024-illustration-concept-image-generee-par-ia_268835-6125.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1722124800&semt=sph" alt="" srcset="">
                           
                            <input type="text"  class='alt_class'  title="<?php echo  'alt_img'.$title_projet_child[$x] ?>" onkeyup="alt_img(this)" placeholder="ALT IMG ICI">
                           
                           </div>
       
                           <?php 
                    }
                    else {
                        ?>
                        <div class="div_img">
       
                            <img class="<?php echo $id_projet[$a] ?>" onclick="add_img_child(this)" title="<?php echo $id_projet_child[$x]  ?>" src="https://img.freepik.com/photos-gratuite/jeux-olympiques-paris-2024-illustration-concept-image-generee-par-ia_268835-6125.jpg?size=626&ext=jpg&ga=GA1.1.2008272138.1722124800&semt=sph" alt="" srcset="">
                           
                           
                           </div>
       
                           <?php 
                    }

                }
                ?>



 <?php
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

     .div_img {
         width: 60%;
         margin: auto;
     }

     .div_img img {
         width: 100%;
     }
     .alt_class{
        padding: 15px;
        margin-top:50px;
        margin-bottom:50px;

     }
     textarea {
        width: 100%;

    
    height:70px ; 

        margin-top: 20px;
        margin-bottom: 20px;
border: 1px solid rgba(0, 0, 0, 0);
border-bottom: 3px solid #584e80;


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

     function remove_(_this) {
         _this.style.display = "none";
         console.log(_this.title);
         document.getElementById(_this.title + "_remove").className = "";
     }


     function remove_projet_child(_this) {
         console.log(_this.title);



         var ok = new Information("../remove/remove_projet_child.php"); // création de la classe 

         ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 

         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // envoie l'information au code pkp 



         const myTimeout = setTimeout(myGreeting, 150);

         function myGreeting() {
             location.reload();
         }

     }


     function add_img_child(_this) {

         var ok = new Information("../cookie/add_img_child.php"); // création de la classe 

         ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 
         ok.add("id_user_projet_child", _this.className); // ajout de l'information pour lenvoi 





         console.log(ok.info()); // demande l'information dans le tableau
         ok.push(); // 



         const myTimeout = setTimeout(xx, 250);

         function xx() {
             window.location.href = "../src_/index.php";

         }



     }

     function alt_img(_this) {





 


 
         const myTimeout_1 = setTimeout(myGreeting, 100);


         function myGreeting() {






             if (envoyer) {

                 const myTimeout_2 = setTimeout(myGreeting_2, 1000);
             }


             envoyer = false;

         }

         function myGreeting_2() {


             envoyer = true;







 





             var ok = new Information("../update/alt_img.php"); // création de la classe 

             ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 
             ok.add("title_projet_child", _this.value); // ajout de l'information pour lenvoi 


        
             


             console.log(ok.info()); // demande l'information dans le tableau
             ok.push(); // envoie l'information au code pkp 
 

         }





     }
 </script>

 <style>
     .remove_ {
         margin-left: 25px;
         margin-top: 25px;

     }

     .remove_ img:hover {
         cursor: pointer;
     }
     .optiones{
        background-color: white;
        padding: 20px;
     }
     p {
        text-align: justify;
     }
     h1,h2,h3,h4{
        text-align: center;
     }
 </style>

<div class="display_flex_1 optiones" >
                <div class="display_none" onclick="display_none(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo "display_none_" . $id_projet[$a] ?>">
                    <img width="50" height="50" src="https://img.icons8.com/color/50/delete-forever.png" alt="delete-forever" />
                </div>
                <div onclick="left_opntion(this)" class="left_option" title="<?php echo  $id_projet[$a] ?>">
                    <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever" />

                </div>
                <div class="display_block" onclick="display_block(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo "display_block_" . $id_projet[$a] ?>">
                    <img width="50" height="50" src="https://img.icons8.com/ios/50/plus--v1.png" alt="plus--v1" />
                </div>
            </div>

            
            <?php 

if ($id_user==$id_user_projet[$a]) {

    ?>

        <div style="background-color: white;" class="display_none" id="<?php echo "display_block_x_" . $id_projet[$a] ?>">

            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo 'h1' ?>" onclick="options_child(this)">
                <img class="cursoir_pointer" width="25" height="25" src="https://img.icons8.com/ios/25/hydrogen.png" alt="hydrogen" />
            </div>

            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo 'list' ?>" onclick="options_child(this)">
                <img width="24" height="24" src="https://img.icons8.com/parakeet-line/24/list.png" alt="list" />

            </div>
            <div title="<?php echo $id_projet[$a] ?>" class="<?php echo 'img' ?>" onclick="options_child(this)">
                <img class="cursoir_pointer" width="25" height="25" src="https://img.icons8.com/ios/25/image-file.png" alt="image-file" />
            </div>
        </div>

    <?php

    }

    ?>