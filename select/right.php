<?php
session_start();




$id_user__ =  $_SESSION["id_user"];



$req_sql  = 'SELECT * FROM `' . $config_dbname . '` WHERE `id_user` ="' . $id_user__ . '" ';


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_user");
$id_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_sha1_user");
$id_sha1_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_parent_user");
$id_parent_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "description_user");
$description_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "title_user");
$title_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "img_user");
$img_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "nom_user");
$nom_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "prenom_user");
$prenom_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "password_user");
$password_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "email_user");
$email_user = $databaseHandler->tableList_info[0];

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "date_inscription_user");
$date_inscription_user = $databaseHandler->tableList_info[0];





?>




<div class="card right_info">

    <input style="width: 50%;margin:auto"  onkeyup="input_right(this)" title="<?php echo $id_user__ ?>" id="<?php echo "input_1_" . $id_user__  ?>" type="text" class="input_right" value="<?php echo $title_user ?>" placeholder="title user">

    <br/>
    <div class="distance01"></div>
    <?php
    if ($img_user == "") {
    ?>
        <div class="fakeimg" onclick="add_img_child2(this)">Image</div>


    <?php
    } else {
    ?>

        <img src="<?php echo 'src_/' . $img_user ?>" alt="" srcset="" class="right_img distance01" onclick="add_img_child2(this)">


    <?php


    }
    ?>
    <textarea  style="margin-bottom:70px" onkeyup="input_right(this)" title="<?php echo $id_user__ ?>" id="<?php echo "input_3_" . $id_user__  ?>" name="" style="opacity: 1;"><?php echo $description_user ?></textarea>

</div>




<script>
    function input_right(_this) {



















        const myTimeout_1 = setTimeout(myGreeting, 100);


        function myGreeting() {






            if (envoyer) {

                console.log("simulation") ; 
                const myTimeout_2 = setTimeout(myGreeting_2, 1000);
            }


            envoyer = false;

        }

        function myGreeting_2() {


            envoyer = true;



            // var nom_user = document.getElementById("input_1_" + _this.title).value;
       
       

            var title_user = document.getElementById("input_1_" + _this.title).value;
  
            var description_user = document.getElementById("input_3_" + _this.title).value;

 






            var ok = new Information("update/right_user_info.php"); // création de la classe 

            ok.add("title_user", title_user); // ajout de l'information pour lenvoi 
       
            ok.add("description_user", description_user); // ajout de l'information pour lenvoi 


            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 
 

        }



    }




    function add_img_child2(_this) {

        var ok = new Information("cookie/add_img_child2.php"); // création de la classe 




        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // 



        const myTimeout = setTimeout(xx, 250);

        function xx() {
            window.location.href = "src_/index.php";

        }



    }
</script>



<style>
 

    .right_info input,
    .right_info textarea{
       width: 100%;

    }
    .fakeimg,.right_img{
        width: 50px;
        height: 50px;
        background-color: black;
    }
    .style_input_user{
        width: 50%;
        margin: auto;
    }
   
    .distance01{
        margin-bottom: 105px;
    }
   
</style>
<img width="100" height="100" src="https://img.icons8.com/ios/100/home--v1.png" alt="home--v1"/>