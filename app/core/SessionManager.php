<?php

function startSession():void{
    if(session_status()=== PHP_SESSION_NONE){
        session_start();
    }
}

function initializeData():void{
   if(!isset($_SESSION['users'])){
     $_SESSION['users'] =
    [
        ['nomPrenom'=>'Awa TALL','email'=>'awa@g.com','password'=>'1234','role'=>'apprenant'],
        ['nomPrenom'=>'Fatou DIOP','email'=>'fatou@g.com','password'=>'1234','role'=>'apprenant'],
        ['nomPrenom'=>'Mamadou SY','email'=>'Sy@g.com','password'=>'1234','role'=>'gerant'],
    ];
   }
}

function save(array $key,mixed $value){
    $_SESSION[$key]=$value;
}

function getData($key):mixed{
    return $_SESSION[$key] ?? null;
}

function removeData($key){
    unset($_SESSION[$key]);
}

function destroySession(){
    session_destroy();
}


?>