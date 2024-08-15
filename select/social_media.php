<?php 

 

$look = false;  
if(isset($_SESSION["id_user"])) {
    $look =  true ; 
 
    ?>

<img title="<?php echo $id_user?>" onclick="social_media(this)" width="50" height="50" src="https://img.icons8.com/office/50/plus--v1.png" alt="plus--v1"/>


<?php 
}
 

 
$req_sql  = 'SELECT * FROM `social_media` WHERE `id_user_social_media` ="'.$id_user.'"';


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_social_media");
$id_social_media = $databaseHandler->tableList_info;


$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "name_social_media");
$name_social_media = $databaseHandler->tableList_info;

$databaseHandler = new DatabaseHandler($config_dbname, $config_password);


$databaseHandler->getDataFromTable($req_sql, "img_projet_src_social_media");
$img_projet_src_social_media = $databaseHandler->tableList_info;





$databaseHandler = new DatabaseHandler($config_dbname, $config_password);


$databaseHandler->getDataFromTable($req_sql, "title_social_media");
$title_social_media = $databaseHandler->tableList_info;
 
 
 




 
 for($aa = 0 ; $aa<count($id_social_media) ; $aa++) {


    if($look){
  ?>
<input class="input_1" placeholder="Nom du réseau" onkeyup="social_media_keyup(this)" title="<?php echo $id_social_media[$aa] ?>" id="<?php echo "name_social_media_".$id_social_media[$aa] ?>" type="text" style="border-bottom:5px solid black" value="<?php echo $name_social_media[$aa] ?>">
<input placeholder="Lien de la page" class="input_2" onkeyup="social_media_keyup(this)" title="<?php echo $id_social_media[$aa] ?>" id="<?php echo "title_social_media_".$id_social_media[$aa] ?>" type="text" style="border-bottom:5px solid black, opacity:0.7" value="<?php echo $title_social_media[$aa] ?>">


<?php 

    }



    
    if($look){




if($img_projet_src_social_media[$aa]!=""){
    ?>
    
<div class="social_class">
<img onclick="social_media_click(this)" title="<?php echo $id_social_media[$aa] ?>" src="<?php echo '../src_/'.$img_projet_src_social_media[$aa] ?>" alt="" srcset="">

</div>
 

<?php 
 
}
else {
?>



<div class="social_class">
<img    onclick="social_media_click(this)"  title="<?php echo $id_social_media[$aa] ?>" width="25" height="25" src="https://img.icons8.com/ios/25/image-file.png" alt="image-file"/>

</div>

<?php 
}
    }
    else {

       ?>


       <div class="name_social_media">
        <?php 
                echo $name_social_media[$aa] ; 
        ?>
       </div>
<div class="social_class">

<a href="<?php echo $title_social_media[$aa] ?>">
<img   title="<?php echo $id_social_media[$aa] ?>" src="<?php echo '../src_/'.$img_projet_src_social_media[$aa] ?>" alt="" srcset="">

</a>

</div>

<?php 
    }
 } 
?>



<script>
    function social_media(_this) {
        console.log(_this.title) ;
        var ok = new Information("../insert/social_media.php"); // création de la classe 
        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 


        const myTimeout = setTimeout(myGreeting, 250);

function myGreeting() {
  location.reload() ; 
}



    }

    function social_media_keyup(_this) {
  

        var ok = new Information("../update/social_media_keyup.php"); // création de la classe 
ok.add("id_social_media", _this.title); // ajout de l'information pour lenvoi 


 
 

 var title_social_media = document.getElementById("title_social_media_"+_this.title).value ;
 var name_social_media = document.getElementById("name_social_media_"+_this.title).value ; 

 
 
/*
name_social_media
title_social_media
*/
 

ok.add("title_social_media", title_social_media); // ajout de l'information pour lenvoi 
ok.add("name_social_media", name_social_media); // ajout de l'information pour lenvoi 

console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 


    }

    function social_media_click(_this) {
       



        var ok = new Information("../cookie/add_img_child3.php"); // création de la classe 

ok.add("id_projet_child", _this.title); // ajout de l'information pour lenvoi 
ok.add("id_user_projet_child", _this.className); // ajout de l'information pour lenvoi 



ok.add("id_social_media", _this.title); // ajout de l'information pour lenvoi 


console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // 



const myTimeout = setTimeout(xx, 250);

function xx() {
   window.location.href = "../src_/index.php";

}






    }
</script>

<style>

    
    .social_class img{
        width: 25px;
        margin-bottom: 100px;
        height: 25px;
    }
    .social_class img:hover{
   cursor: pointer;
    }
    .name_social_media{
        text-align: center;
        margin-bottom: 25px;
        margin-top: 25px;
        margin-bottom: 50px;


    }


    .input_1, 
        .input_2 {
        margin-top: 50px;
        background-color: #a5a0b9;
    }
    .input_2 {

margin-bottom: 50px;
    }
</style>
