<?php
require_once(dirname(__DIR__)."/models/UtilisateurModel.php");
require_once(dirname(__DIR__)."/core/Validator.php");
startSession();
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



function register()
{
//  var_dump($_SERVER["REQUEST_METHOD"]);
//     die;
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        // var_dump($email);

        $addUser = [
                    'nomPrenom'=>$nom,
                    'email'=>$email,
                    'password'=>$password,
                    'role'=> 'apprenant'
                   ];

        saveUser($addUser);

        // echo "<pre>";
        // print_r($_SESSION['users']);
        // echo "</pre>";
        // die;


        header('location: /login');

    }
    elseif($_SERVER["REQUEST_METHOD"] === "GET"){
        
    require_once dirname(__DIR__) . "/views/authentification/register.php";
    }
}


?>