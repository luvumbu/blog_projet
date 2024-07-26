<?php 
session_start() ; 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blog_projet</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<body>
    <link rel="stylesheet" href="css.css">
<script src="js.js"></script>
<div id="form_sql_php_info"></div>
<?php 
$filename = 'class/config.php';  
$verif_data = 0 ;
// recherche de lelement 
require_once 'class/filename.php' ; 
require_once 'class/databaseHandler.php' ; 
require_once 'class/verif_filename.php' ; 
// toute cette partie ferifie le bon fonctionnement de l'application class/verif_filename.php
 if(isset($_SESSION["nom_user"] )) {
    require_once "select/login.php" ; 
}
    else {
        require_once 'select/form_data.php' ; 
    }


    if($verif_data ==1){
        ?>
        <script>  
        var form_send = new Atribute("form_send");
        form_send.exe_atribute("title","form_data_2");
        form_send.exe_atribute("style","background-color:#584e80;");
       </script>
            <?php 
    }

// si la   $verif_data == 0 le fichier config est bon si non 
// si non demande de se connecter à fin de creer le fichier de configuration
?>

<script>
    var form_send = new Atribute("config_dbname");
    form_send.exe_atribute("style","margin-top:5px;border-radius:5px;border:1px solid rgba(0,0,0,0.1");
    form_send.exe_atribute("placeholder","Login");
    var form_send = new Atribute("config_password");
    form_send.exe_atribute("style","margin-top:5px;border-radius:5px;border:1px solid rgba(0,0,0,0.1");
    form_send.exe_atribute("placeholder","mot de passe");

</script>


 <style>
        #form_sql_php_info{
        text-align: center;
  
      
    }
 </style>


<script>
var envoyer = true ; 

var left_names = 
[
    'name_projet',
    'title_projet',
    'description_projet'
] ; 
    function left_action(_this){
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


    

      var name_projet =  document.getElementById(xb+"_"+left_names[0]).value ; 
      var title_projet =  document.getElementById(xb+"_"+left_names[1]).value ; 
      var description_projet =  document.getElementById(xb+"_"+left_names[2]).value ; 

 

 











  const myTimeout_1 = setTimeout(myGreeting, 100);


function myGreeting() {

 




  if(envoyer){

  const myTimeout_2 = setTimeout(myGreeting_2, 1000);
}


envoyer = false ; 
 
}

function myGreeting_2(){

    
    var name_projet =  document.getElementById(xb+"_"+left_names[0]).value ; 
      var title_projet =  document.getElementById(xb+"_"+left_names[1]).value ; 
      var description_projet =  document.getElementById(xb+"_"+left_names[2]).value ;




      
    envoyer = true ;  
    var ok = new Information("update/left_update.php"); // création de la classe 

ok.add("id_projet", xb); // ajout de l'information pour lenvoi 
ok.add("name_projet", name_projet); // ajout de l'information pour lenvoi 

ok.add("title_projet", title_projet); // ajout de l'information pour lenvoi 
ok.add("description_projet", description_projet); // ajout de l'information pour lenvoi 


console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 

}




    }
</script>
 
</body>
</html>