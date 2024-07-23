<div style="display: flex;justify-content:space-around">
    
        <div>
            Blog
             
        </div>

        <div>
            CV
             
        </div>

        <div>
            Page web
             
        </div>
  <div>      <a href="class/destroy.php">
  <img width="50" height="50" src="https://img.icons8.com/cotton/50/shutdown--v1.png" alt="shutdown--v1"/>
</a></div> 


</div>

 


<div id="section">
    <div>
        <?php 
                require_once 'left.php' ; 
        ?>
    </div>
    <div>
        <?php 

                require_once 'right.php' ; 
        ?>
    </div>
</div>



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
<style>
    #section{
        display: flex;
        justify-content: space-between;
    }
</style>