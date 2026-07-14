<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscription - CotisationClasse</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-50 min-h-screen flex items-center justify-center py-8">

  <div class="w-full max-w-md mx-auto px-4">

    <div class="bg-white border border-gray-300 rounded-xl mt-3 p-6">
      <h2 class="text-xl font-bold text-gray-800 text-center">Créer un compte</h2>
      <p class="text-gray-500 text-sm text-center">Rejoignez votre classe</p>
      <hr class="my-4 border-gray-200">

      <form action="/register" method="POST">
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-800 mb-1">Prenom et Nom</label>
          <input type="text"  name="nom" placeholder="Moussa Diop" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-green-500">
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-800 mb-1">Email</label>
          <input type="email" name="email" placeholder="moussa@email.com" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-green-500">
        </div>
        <div class="mb-4">
          <label class="block text-sm font-medium text-gray-800 mb-1">Mot de passe</label>
          <input type="password" name="password" placeholder="••••••••" class="w-full border border-gray-300 rounded-lg px-3 py-2.5 text-sm focus:outline-none focus:border-green-500">
        </div>
         <input type="submit" name="inscription" value= "S'inscrire" class="w-full bg-green-700 text-white font-bold py-3 rounded-lg hover:bg-green-800 text-sm">
      </form>

      <p class="text-center text-sm text-green-700 font-medium mt-4"><a href="/login" class="hover:underline">Déjà inscrit ? Se connecter</a></p>
    </div>
  </div>

</body>
</html>
