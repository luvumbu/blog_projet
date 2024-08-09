<?php



 
$req_sql  = "SELECT * FROM `projet` WHERE 1  ";
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
 


function asciiToString($asciiString)
{
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


$somme =  count($databaseHandler->tableList_info);



for ($a = 0; $a < $somme; $a++) {


  $name_projet[$a] = asciiToString($name_projet[$a]);
  $title_projet[$a]  = asciiToString($title_projet[$a]);



  echo  '<h1 class="h1_style_01" title="'.$title_projet[$a].'">'.$name_projet[$a].'</h1>' ; 


  echo  '<p>'.$description_projet[$a].'</p>' ;

 ?>
 
 





 
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

<style>
  .display_none {
    display: none;
  }

  .left_boucle {

  margin-bottom: 50px;
  margin-top: 50px;

  }

  .left_boucle input,
  .left_boucle textarea {
    width: 100%;
    border: 1px solid rgba(0, 0, 0, 0.1);
  }

  .left_boucle input {


    margin-bottom: 5px;
    padding-top: 15px;
    padding-bottom: 15px;

  }

  .left_boucle textarea {
 
    height: 250px;
    margin: auto;
  }
  .left_option_parent{
   
    display: flex;
  justify-content: space-around;
  }
  .h1_style_01{
    text-align: center;
    background-color: black;
    color: white;
    margin: 0;
    padding: 0;
    text-shadow: 1px 1px red;
 
  }
  body{
    margin: 0;
    padding: 0;
  }
</style>
