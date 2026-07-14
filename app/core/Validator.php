<?php

function isUnique(string $value,array $datas,array &$tabError):void{
    foreach ($datas as  $data) {
        if($data[$key] == $value){
            $tabError[$key]["Pas unique"] = $smsError;
        }
    }
}

function isEmpty(string $value,array &$tabError):void{
    if(empty($value)){
        $tabError[$key]["Pas vide"] = $smsError;
    }
}

function isEmail(string $value, array &$tabError, string $key): void
{
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $tabError[$key]["email"] = "Email invalide";
    }
}

?>