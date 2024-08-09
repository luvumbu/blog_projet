<?php 

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


?>