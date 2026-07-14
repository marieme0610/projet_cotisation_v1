<?php
require_once(dirname(__DIR__)."/core/SessionManager.php");

function getUserByEmail($data){

    $users = $_SESSION['users'] ?? [];

    foreach($users as $user){

        if ($user['email'] == $data) {
            return $user;
        }

    }

    return null;
}

function saveUser($data){
     $getTabUsers = getData('users');
     array_push($getTabUsers,$data);
     save('users',$getTabUsers);
}

?>