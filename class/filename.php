<?php 

function filename($filename){
    if (file_exists($filename)) {
        
        return 1 ; 
    } else {
        
        return 0 ; 
    }
}

?>