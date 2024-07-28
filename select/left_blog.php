<?php


require_once 'class/give_url.php';

$give_url =  give_url();


if (give_url() == "blog.php") {
    echo '<a href="../index.php">acceuil</a>';

    header("Location: index.php");
    exit;
}

if (isset($_SESSION["nom_user"])) {

    echo '<a href="../index.php">acceuil</a>';
} else {
}
$id_user = $_SESSION["id_user"];
$req_sql  = "SELECT * FROM `projet` WHERE `id_projet` = '" . $give_url . "'";
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_projet");
$id_projet = $databaseHandler->tableList_info;





$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "name_projet");
$name_projet = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_user_projet");
$id_user_projet = $databaseHandler->tableList_info;




$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "title_projet");
$title_projet = $databaseHandler->tableList_info;




$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "description_projet");
$description_projet = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "description_title_projet");
$description_title_projet = $databaseHandler->tableList_info;



$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "img_projet_src");
$img_projet_src = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_sha1_projet");
$id_sha1_projet = $databaseHandler->tableList_info;







$somme =  count($databaseHandler->tableList_info);



for ($a = 0; $a < $somme; $a++) {
?>


    <div class="card">

        <?php


        if ($id_user==$id_user_projet[$a]) {

        ?>
            <h2><input type="text" onkeyup="left_action_blog(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo $id_projet[$a] . "_name_projet" ?>" title="name_projet" placeholder="TITLE HEADING" value="<?php echo  $name_projet[$a] ?>"></h2>
            <textarea name="" onkeyup="left_action_blog(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo $id_projet[$a] . "_title_projet" ?>" placeholder="Title description, Dec 7, 2017"><?php echo  $title_projet[$a] ?></textarea>

        <?php

        } else {
        ?>
            <h2 title="<?php echo  $title_projet[$a] ?>"><?php echo  $name_projet[$a] ?></h2>

        <?php
        }

        ?>

        <?php

        if ($id_user==$id_user_projet[$a]) {

        ?>







            <?php
            /*

            <div style="margin-top:20px">

                <input class="margin_styl_1" type="text" style="border-bottom:1px solid black;width:80%">
               
                <select class="form-select" aria-label="Default select example">
  <option value="h1">h1</option>
  <option value="h2">h2</option>
  <option value="h3">h3</option>
  <option value="h4">h4</option>
  <option value="h5">h5</option>
  <option value="p">p</option>


</select>
                <br />
                <input class="margin_styl_1" type="text" style="border-bottom:1px solid rgba(0,0,0,0.4);width:80%">
                <br />

                <img class="margin_styl_1" width="25" height="25" src="https://img.icons8.com/color/25/delete-forever.png" alt="delete-forever" />
            </div>

  

            <div style="margin-top:20px">
                <div>
                    <img width="50" height="50" src="https://img.icons8.com/ios/50/image-file.png" alt="image-file" />

                </div>
                <img class="margin_styl_1" width="25" height="25" src="https://img.icons8.com/color/25/delete-forever.png" alt="delete-forever" />
            </div>

  */
            ?>


            <div class="display_flex_1">
                <div class="display_none" onclick="display_none(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo "display_none_" . $id_projet[$a] ?>">
                    <img width="25" height="25" src="https://img.icons8.com/color/25/delete-forever.png" alt="delete-forever" />
                </div>
                <div onclick="left_opntion(this)" class="left_option" title="<?php echo  $id_projet[$a] ?>">
                    <img width="25" height="25" src="https://img.icons8.com/ios-filled/25/delete-forever.png" alt="delete-forever" />

                </div>
                <div class="display_block" onclick="display_block(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo "display_block_" . $id_projet[$a] ?>">
                    <img width="25" height="25" src="https://img.icons8.com/ios/25/plus--v1.png" alt="plus--v1" />
                </div>
            </div>




        <?php


        }

        ?>






        <?php

        if ($id_user==$id_user_projet[$a]) {

        ?>

            <div class="display_none" id="<?php echo "display_block_x_" . $id_projet[$a] ?>">

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


    </div>
<?php



    require 'select/left_projet_child.php';
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



<style>
    .margin_top_1 {
        margin-top: 25px;
    }

    #jo {
        background-image: url("https://img.freepik.com/photos-gratuite/jeux-olympiques-paris-2024-illustration-concept-image-generee-par-ia_268835-6125.jpg");
        height: 250px;

        min-width: 100%;
    }

    .display_none {
        display: none;
    }

    .left_option:hover {
        cursor: pointer;
    }

    .cursoir_pointer:hover {
        cursor: pointer;
    }

    .display_flex_1 {
        display: flex;
        justify-content: space-around;
    }

    .src_img {
        width: 100%;
    }

    textarea {
        width: 100%;

        border: 1px solid rgba(0, 0, 0, 0);
        opacity: 0.3;

        margin-top: 20px;
        margin-bottom: 20px;

    }

    input {
        width: 100%;
        border: 1px solid rgba(0, 0, 0, 0);
    }

    .remve_all {
        margin-top: 25px;
        margin-bottom: 25px;

    }

    .cursor_pointer:hover {
        cursor: pointer;
    }

    .margin_styl_1 {
        margin-top: 20px;
    }
</style>


<script>
    function src_img(_this) {
        console.log(_this.title);
    }
</script>


<script>
    function left_opntion(_this) {
        console.log(_this.title);

        document.getElementById("display_none_" + _this.title).className = "cursor_pointer";
        _this.style.display = "none";
    }



    var envoyer = true;

    var left_names = [
        'name_projet',
        'title_projet',
        'description_projet'
    ];

    function left_action_blog(_this) {


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






            var ok = new Information("../update/left_update.php"); // création de la classe 

            ok.add("id_projet", _this.title); // ajout de l'information pour lenvoi 

            ok.add("title_projet", _title_projet); // ajout de l'information pour lenvoi 
            ok.add("name_projet", _name_projet); // ajout de l'information pour lenvoi 


            console.log(ok.info()); // demande l'information dans le tableau
            ok.push(); // envoie l'information au code pkp 


        }

    }


    function display_none(_this) {
        envoyer = true;
        var ok = new Information("../update/display_none.php"); // création de la classe 

        ok.add("id_projet", _this.title); // ajout de l'information pour lenvoi 



        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 



        const myTimeout = setTimeout(relod, 300);

        function relod() {
            location.reload();
        }
    }

    function display_block(_this) {

        document.getElementById("display_block_x_" + _this.title).className = "display_flex_1 margin_top_1";

    }


    function options_child(_this) {
        console.log(_this.className);



        var ok = new Information("../insert/options_child.php"); // création de la classe 

        ok.add("id_sha1_parent_projet_child", _this.title); // ajout de l'information pour lenvoi 
        ok.add("statue_projet_child", _this.className); // ajout de l'information pour lenvoi 






        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 





    }
</script>