<?php



$id_user = $_SESSION["id_user"];
$req_sql  = "SELECT * FROM `projet` WHERE `id_user_projet`='$id_user' AND `statue_projet` !='display_none' ORDER BY `projet`.`id_projet` DESC ";
$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "id_projet");
$id_projet = $databaseHandler->tableList_info;





$databaseHandler = new DatabaseHandler($config_dbname, $config_password);
$databaseHandler->getDataFromTable($req_sql, "name_projet");
$name_projet = $databaseHandler->tableList_info;


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
    <h2><input type="text" onkeyup="left_action(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo $id_projet[$a] . "_name_projet" ?>" title="name_projet" placeholder="TITLE HEADING" value="<?php echo  $name_projet[$a] ?>"></h2>

    <textarea name="" onkeyup="left_action(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo $id_projet[$a] . "_title_projet" ?>" placeholder="Title description, Dec 7, 2017"><?php echo  $title_projet[$a] ?></textarea>




    <div class="display_flex_1">
      <div class="display_none" onclick="display_none(this)" title="<?php echo $id_projet[$a] ?>" id="<?php echo "display_none_" . $id_projet[$a] ?>">
        <img width="50" height="50" src="https://img.icons8.com/color/50/delete-forever.png" alt="delete-forever" />
      </div>
      <div onclick="left_opntion(this)" class="left_option" title="<?php echo  $id_projet[$a] ?>">
        <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/delete-forever.png" alt="delete-forever" />

      </div>

      <a href="<?php echo 'blog.php/'.$id_projet[$a] ?>">
        <div class="left_option" title="<?php echo  $id_projet[$a] ?>">
          <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/settings.png" alt="settings" />
        </div>
      </a>


    </div>


  </div>
<?php




  /*
  $id_sha1_projet_a = $id_sha1_projet[$a];


  $req_sql_2 = 'SELECT * FROM `children_projet` WHERE `id_sha1_parent_children_projet`="' . $id_sha1_projet_a . '"';


  $databaseHandler = new DatabaseHandler($config_dbname, $config_password);
  $databaseHandler->getDataFromTable($req_sql_2, "id_children_projet");
  $id_children_projet = $databaseHandler->tableList_info;




  for ($x = 0; $x < count($id_children_projet); $x++) {
    //echo 'info !!'.$x ."<br/>" ; 

  }


  */
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
  #jo {
    background-image: url("https://img.freepik.com/photos-gratuite/jeux-olympiques-paris-2024-illustration-concept-image-generee-par-ia_268835-6125.jpg");
    height: 500px;

    min-width: 100%;
  }

  .display_none {
    display: none;
  }

  .left_option:hover {
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

  .remve_all {
    margin-top: 25px;
    margin-bottom: 25px;

  }

  .cursor_pointer:hover {
    cursor: pointer;
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

  function left_action(_this) {


    /*
  var xa = "" ; 
  var xb = "" ; 
var x_verif = false ; 
       
       for(var x = 0 ;x< _this.id.length ; x++ ) {


        if(_this.id[x]=="_"){
            x_verif = true  ; 
        }
      
        if(x_verif){
            if(_this.id[x]!="_"){
                xa = xa+_this.id[x] ;
            }
           
        }
        else {
            if(_this.id[x]!="_"){
            xb = xb+_this.id[x] ;
            }
        }
       }


    

 

 
*/












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


      console.log(_title_projet);
      console.log(_name_projet);






      var ok = new Information("update/left_update.php"); // création de la classe 

      ok.add("id_projet", _this.title); // ajout de l'information pour lenvoi 

      ok.add("title_projet", _title_projet); // ajout de l'information pour lenvoi 
      ok.add("name_projet", _name_projet); // ajout de l'information pour lenvoi 


      console.log(ok.info()); // demande l'information dans le tableau
      ok.push(); // envoie l'information au code pkp 

    }




  }

  function display_none(_this) {
    envoyer = true;
    var ok = new Information("update/display_none.php"); // création de la classe 

    ok.add("id_projet", _this.title); // ajout de l'information pour lenvoi 



    console.log(ok.info()); // demande l'information dans le tableau
    ok.push(); // envoie l'information au code pkp 



    const myTimeout = setTimeout(relod, 300);

    function relod() {
      location.reload();
    }






  }
</script>