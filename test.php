<?php 

 
function stringToAscii($input) {
    $asciiArray = [];
    for ($i = 0; $i < strlen($input); $i++) {
        $asciiArray[] = ord($input[$i]);
    }
    return $asciiArray;
}

// Exemple d'utilisation
$inputString = "Bonjour";
$inputString = stringToAscii($inputString);
echo   implode(", ", $inputString);
 


?>

<?php
function asciiToString($asciiString) {
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

// Exemple d'utilisation
$asciiValues = "66, 111, 110, 106, 111, 117, 114";
$outputString = asciiToString($asciiValues);
echo "La chaîne correspondante aux valeurs ASCII $asciiValues est : '$outputString'";
?>
