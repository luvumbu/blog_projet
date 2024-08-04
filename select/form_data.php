<div id="informarion_"></div>
<div id="form">
        <input type="text" id="config_dbname">
        <input type="text" id="config_password">
        <div id="form_send" title="form_data_1">Envoyer</div>
</div>
 
 

<script>
        document.getElementById("form_send").addEventListener("click", form_sql);

        function form_sql() {
                var config_dbname = document.getElementById("config_dbname").value ; 
                var config_password = document.getElementById("config_password").value ; 

                 var form_send = document.getElementById("form_send").title ; 
                 var ok = new Information("req/form_sql.php"); // création de la classe 
                 
                  ok.add("config_dbname", config_dbname); // ajout de l'information pour lenvoi 
                  ok.add("config_password", config_password); // ajout d'une deuxieme information denvoi  
                  ok.add("form_send", form_send); // ajout de l'information pour lenvoi 
                  console.log(ok.info()); // demande l'information dans le tableau
                 ok.push(); // envoie l'information au code pkp 
                 Ajax("form_sql_php_info","req/form_sql_php_info.php");
        }


           var form_send = new Atribute("config_dbname");
           form_send.exe_atribute("style","margin-top:5px;border-radius:5px;border:1px solid rgba(0,0,0,0.1");
           form_send.exe_atribute("placeholder","Login");
           var form_send = new Atribute("config_password");
           form_send.exe_atribute("style","margin-top:5px;border-radius:5px;border:1px solid rgba(0,0,0,0.1");
           form_send.exe_atribute("placeholder","mot de passe");
       
</script>


<?php 

if($verif_data ==1){



        if(!isset($_SESSION["nom_user"] ))
        // utilisateur en ligne
        {
       ?>
       

       <?php 
        }


        ?>
        <script>  
        var form_send = new Atribute("form_send");
        form_send.exe_atribute("title","form_data_2");
        form_send.exe_atribute("style","background-color:#584e80;");
       var Connexion =  document.getElementById("informarion_") ; 
       Connexion.innerHTML =  "Connexion et Inscription" ;
       Connexion.setAttribute("class","text_align") ; 

       </script>
            <?php 
    }

    ?>


 