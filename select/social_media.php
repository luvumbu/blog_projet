<?php 


if(isset($_SESSION["id_user"])) {
  
$id_user = $_SESSION["id_user"] ; 
    ?>

<img title="<?php echo $id_user?>" onclick="social_media(this)" width="50" height="50" src="https://img.icons8.com/office/50/plus--v1.png" alt="plus--v1"/>


<?php 
}
 

$id_user =  $_SESSION["id_user"] ; 
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
 

 
 
 for($aa = 0 ; $aa<count($id_social_media) ; $aa++) {
  ?>
<input onkeyup="social_media_keyup(this)" title="<?php echo $id_social_media[$aa] ?>" type="text" style="border-bottom:5px solid black" value="<?php echo $name_social_media[$aa] ?>">


<?php 



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
<img   onclick="social_media_click(this)" title="<?php echo $id_social_media[$aa] ?>" width="50" height="50" src="https://img.icons8.com/ios/50/image-file.png" alt="image-file"/>

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

    }

    function social_media_keyup(_this) {
        console.log(_this.title) ; 

        var ok = new Information("../update/social_media_keyup.php"); // création de la classe 
ok.add("id_social_media", _this.title); // ajout de l'information pour lenvoi 
ok.add("name_social_media", _this.value); // ajout de l'information pour lenvoi 

  
 
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
        width: 100px;
        height: 100px;
    }
</style>