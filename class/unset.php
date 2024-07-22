<?php 
session_start() ;  
    // Détruire la session spécifique 'liste_projet_admin_insert'
    unset($_SESSION[$_POST["destroy2"]]);
 
?>