<div id="form">
        <input type="text" id="config_dbname">
        <input type="text" id="config_password">
        <div id="form_send" title="form_data_1">Envoyer</div>
</div>
 
<style>
        #form{
                text-align: center;
                width: 60%;
                margin: auto;
                margin-top : 50px; 

        }
        #form input, #form_send{
               width: 100%;
               padding: 8px ;
                
        }
        #form_send {
                background-color: black; 
                color:white ; 
        }
        #form_send:hover {
                        cursor: pointer;
        }
</style>


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
</script>