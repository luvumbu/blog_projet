 
<div style="display: flex;justify-content:space-around" class="login">
    <div style="background-color:white" class="login_" onclick="options(this)"><img width="50" height="50" src="https://img.icons8.com/ios/50/plus--v1.png" alt="plus--v1" />
    </div>

    <div>
        <a href="class/destroy.php">
            <img width="50" height="50" src="https://img.icons8.com/cotton/50/shutdown--v1.png" alt="shutdown--v1" />
        </a>
    </div>
</div>
<div id="section">
    <div>

    </div>
    <div>
  
    </div>
</div>

 

<div class="row">
    <div class="leftcolumn">
        <?php
            require_once 'select/left.php';
        ?>
    </div>
    <div class="rightcolumn">
    <?php
            require_once 'select/right.php';
        ?>
    </div>
</div>

<div class="footer">
      <?php
        require_once 'select/footer.php';
        ?>
</div>

<link rel="stylesheet" href="select/login.css">

<?php


/*
echo $_SESSION["id_user"]  ; 
echo "<br/>" ; 
echo $_SESSION["nom_user"] ; 
echo "<br/>" ; 
echo $_SESSION["prenom_user"] ; 
echo "<br/>" ;  
echo $_SESSION["password_user"] ; 
echo "<br/>" ;  
echo $_SESSION["email_user"] ; 
echo "<br/>" ; 
echo  $_SESSION["date_inscription_user"] ; 
echo "<br/>" ; 
*/

?>



<script>
    function options(_this) {
        console.log(_this.innerHTML);


        var ok = new Information("insert/options.php"); // création de la classe 
        ok.add("_this_innerHTML", _this.innerHTML); // ajout de l'information pour lenvoi 

        console.log(ok.info()); // demande l'information dans le tableau
        ok.push(); // envoie l'information au code pkp 


        const myTimeout = setTimeout(relod, 300);

function relod() {
 location.reload() ; 
}

    }
</script>


<style>
    
</style>