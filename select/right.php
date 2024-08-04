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




<div class="card">

    <input onkeyup="input_right(this)" title="<?php echo $id_user__ ?>" id="<?php echo "input_1_" . $id_user__  ?>" type="text" class="input_right" value="<?php echo $nom_user ?>" placeholder="About Me">

    <?php
    if ($img_user == "") {
    ?>
        <div class="fakeimg" style="height:100px;" onclick="add_img_child2(this)">Image</div>


    <?php
    }
    else {
        ?>
 
<img src="<?php echo 'src_/'.$img_user ?>" alt="" srcset="" class="right_img"  onclick="add_img_child2(this)">


<?php


    }
    ?>
    <textarea onkeyup="input_right(this)" title="<?php echo $id_user__ ?>" id="<?php echo "input_2_" . $id_user__  ?>" name=""><?php echo $title_user ?></textarea>
    <textarea onkeyup="input_right(this)" title="<?php echo $id_user__ ?>" id="<?php echo "input_3_" . $id_user__  ?>" name="" style="opacity: 1;"><?php echo $description_user ?></textarea>

</div>

<!-- 
<div class="card">
    <h3>Popular Post</h3>
    <div class="fakeimg">Image</div><br>
    <div class="fakeimg">Image</div><br>
    <div class="fakeimg">Image</div>
</div>
<div class="card">
    <h3>Follow Me</h3>
    <p>Some text..</p>
</div>
-->

<style>
    .input_right {
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0);
        border-bottom: 1px solid #584e80;
    }
</style>

<script>
    function input_right(_this) {



















        const myTimeout_1 = setTimeout(myGreeting, 100);


        function myGreeting() {






            if (envoyer) {

                const myTimeout_2 = setTimeout(myGreeting_2, 1000);
            }


            envoyer = false;

        }

        function myGreeting_2() {


            envoyer = true;



            var  nom_user= document.getElementById("input_1_" + _this.title).value;
            var title_user = document.getElementById("input_2_" + _this.title).value;
            var description_user = document.getElementById("input_3_" + _this.title).value;

 




 

            var ok = new Information("update/right_user_info.php"); // création de la classe 

            ok.add("title_user", title_user); // ajout de l'information pour lenvoi 
            ok.add("nom_user", nom_user); // ajout de l'information pour lenvoi 
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
    .right_img{
        width: 100%;
        margin-top: 15px;
        margin-bottom: 15px;

    }
</style>