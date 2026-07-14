<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gérant - Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { inter: ['Inter', 'sans-serif'] },
          colors: {
            brand: '#218C21',
            brandLight: '#EDFAED',
            orange: '#E5801A',
            orangeLight: '#FFF5EB',
            grayText: '#999999',
            dark: '#262626',
          }
        }
      }
    }
  </script>
</head>
<body class="bg-[#F2F2F2] font-inter min-h-screen flex flex-col">

  <nav class="bg-white px-4 sm:px-8 py-4 flex items-center justify-between border-b border-gray-100">
    <div class="flex items-center gap-4 sm:gap-8">
      <span class="text-brand font-bold text-base">CotisationClasse</span>
      <div class="flex items-center gap-4 sm:gap-6 text-xs">
        <a href="dashboard.html" class="text-brand font-bold">Dashboard</a>
        <a href="apprenants.html" class="text-grayText hover:text-brand">Apprenants</a>
        <a href="inscrire.html" class="text-grayText hover:text-brand">Inscrire</a>
      </div>
    </div>
    <span class="text-grayText text-[11px] hidden sm:inline">Gérant — Abdou</span>
  </nav>

  <main class="flex-1 px-4 sm:px-8 lg:px-16 py-6">

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
      <div class="bg-brandLight border border-green-200 rounded-lg p-4">
        <p class="text-grayText text-[10px] sm:text-xs mb-1">Total apprenants</p>
        <p class="text-brand text-xl sm:text-2xl font-bold">24</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-lg p-4">
        <p class="text-grayText text-[10px] sm:text-xs mb-1">Apprenants actifs</p>
        <p class="text-brand text-xl sm:text-2xl font-bold">20</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-lg p-4">
        <p class="text-grayText text-[10px] sm:text-xs mb-1">Collectés ce mois</p>
        <p class="text-brand text-xl sm:text-2xl font-bold">100 000 F</p>
      </div>
      <div class="bg-orangeLight border border-orange-200 rounded-lg p-4">
        <p class="text-grayText text-[10px] sm:text-xs mb-1">Retards en cours</p>
        <p class="text-orange text-xl sm:text-2xl font-bold">6</p>
      </div>
    </div>

    <h2 class="text-dark text-sm sm:text-base font-bold mb-4">Apprenants en retard</h2>
    <div class="bg-white rounded-lg overflow-x-auto">
      <table class="w-full text-left min-w-[600px]">
        <thead>
          <tr class="border-b border-gray-200">
            <th class="px-6 py-3 text-grayText text-xs font-medium">Nom</th>
            <th class="px-6 py-3 text-grayText text-xs font-medium">Semaines en retard</th>
            <th class="px-6 py-3 text-grayText text-xs font-medium">Montant dû</th>
            <th class="px-6 py-3 text-grayText text-xs font-medium">Statut</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b border-gray-200">
            <td class="px-6 py-4 text-dark text-sm font-medium">Fatou Diallo</td>
            <td class="px-6 py-4 text-orange text-sm">Sem 5, Sem 8</td>
            <td class="px-6 py-4 text-brand text-sm font-bold">10 000 F</td>
            <td class="px-6 py-4 text-orange text-xs font-medium">Non payé</td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-6 py-4 text-dark text-sm font-medium">Moussa Sow</td>
            <td class="px-6 py-4 text-orange text-sm">Sem 7</td>
            <td class="px-6 py-4 text-brand text-sm font-bold">5 000 F</td>
            <td class="px-6 py-4 text-orange text-xs font-medium">Non payé</td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-6 py-4 text-dark text-sm font-medium">Awa Ndiaye</td>
            <td class="px-6 py-4 text-orange text-sm">Sem 3, Sem 6, Sem 9</td>
            <td class="px-6 py-4 text-brand text-sm font-bold">15 000 F</td>
            <td class="px-6 py-4 text-orange text-xs font-medium">Non payé</td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-6 py-4 text-dark text-sm font-medium">Ibrahima Fall</td>
            <td class="px-6 py-4 text-orange text-sm">Sem 8</td>
            <td class="px-6 py-4 text-brand text-sm font-bold">5 000 F</td>
            <td class="px-6 py-4 text-orange text-xs font-medium">Non payé</td>
          </tr>
          <tr class="border-b border-gray-200">
            <td class="px-6 py-4 text-dark text-sm font-medium">Aminata Ba</td>
            <td class="px-6 py-4 text-orange text-sm">Sem 5, Sem 8</td>
            <td class="px-6 py-4 text-brand text-sm font-bold">10 000 F</td>
            <td class="px-6 py-4 text-orange text-xs font-medium">Non payé</td>
          </tr>
          <tr>
            <td class="px-6 py-4 text-dark text-sm font-medium">Omar Sy</td>
            <td class="px-6 py-4 text-orange text-sm">Sem 9</td>
            <td class="px-6 py-4 text-brand text-sm font-bold">5 000 F</td>
            <td class="px-6 py-4 text-orange text-xs font-medium">Non payé</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>
