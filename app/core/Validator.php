<?php



function isEmpty(string $value, array &$tabError, $key): void
{
    if(empty($value)){
        $tabError[$key]["Pas vide"] = "Le champ $key est obligatoire";
    }
}

function isEmail(string $value, array &$tabError, string $key): void
{
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $tabError[$key]["email"] = "Email invalide";
    }
}

?>