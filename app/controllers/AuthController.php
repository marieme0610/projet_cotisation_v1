<?php
require_once(dirname(__DIR__)."/models/UtilisateurModel.php");
require_once(dirname(__DIR__)."/core/Validator.php");
function login()
{
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $errors = [];
        $email = $_POST['email'];
        $password = $_POST['password'];
        isEmpty($email,$errors,"email");
        isEmpty($password,$errors,"email");
        isEmail($email,$errors,"email");
        // var_dump($errors);
        if(empty($errors)){
           $catchUser = getUserByEmail($email);

// var_dump($catchUser);
// die;

if ($catchUser['role'] == 'apprenant') {

    header('Location: /apprenant/dashboard');
   

} elseif ($catchUser['role'] == 'gerant') {

    header('Location: /gerant/apprenant/dashboard');
   

}
        }

        
       
    }

    require_once dirname(__DIR__) . "/views/authentification/login.php";
}



?>