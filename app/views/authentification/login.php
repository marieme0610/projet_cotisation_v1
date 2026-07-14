<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - CotisationClasse</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-green-50 min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md mx-auto px-6">
    <!-- Logo / Nom application -->
    <h1 class="text-3xl font-bold text-green-700 text-center"> CotisationClasse </h1>
    <p class="text-gray-500 text-center text-sm mt-1">
      Gestion des cotisations </p>
    <!-- Formulaire -->
    <div class="bg-white border border-gray-300 rounded-xl mt-6 p-6">
      <h2 class="text-lg font-bold text-gray-800"> Connexion </h2>
      <p class="text-gray-500 text-sm"> Accédez à votre espace </p>
      <hr class="my-4 border-gray-200">
      <!-- Formulaire de connexion -->
<form action="login" method="POST">

        <!-- Email -->
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-800 mb-1"> Email </label>
           <input  type="email" name="email" placeholder="email@exemple.com" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-green-500">
        </div>

 <!-- Mot de passe -->
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-800 mb-1">  Mot de passe </label>
          <input type="password" name="password" placeholder="••••••" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-green-500"> 
         </div>

         <input type="submit" name="connexion" value= "Se connecter" class="w-full bg-green-700 text-white font-bold py-3 rounded-lg hover:bg-green-800 text-sm">
      </form>
     
      <p class="text-center text-sm text-green-700 cursor-pointer hover:underline mt-4">
        Mot de passe oublié ?
      </p>
      <p class="text-center text-sm text-green-700 font-medium mt-2">
        <a href="/register" class="hover:underline">
          Pas de compte ? S'inscrire
        </a>
      </p>
    </div>
 </div>
</body>
</html>