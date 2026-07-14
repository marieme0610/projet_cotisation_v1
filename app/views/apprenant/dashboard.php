<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Apprenant - Dashboard</title>
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
        <a href="historique.html" class="text-grayText hover:text-brand">Historique</a>
      </div>
    </div>
    <span class="text-grayText text-[11px] hidden sm:inline">Apprenant — Fatou</span>
  </nav>

  <main class="flex-1 px-4 sm:px-8 lg:px-16 py-6">

    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
      <div class="bg-brandLight border border-green-200 rounded-lg p-4">
        <p class="text-grayText text-[10px] sm:text-xs mb-1">Cotisations payées</p>
        <p class="text-brand text-xl sm:text-2xl font-bold">10 / 12</p>
      </div>
      <div class="bg-white border border-green-200 rounded-lg p-4">
        <p class="text-grayText text-[10px] sm:text-xs mb-1">Progression</p>
        <p class="text-brand text-xl sm:text-2xl font-bold">83%</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-lg p-4">
        <p class="text-grayText text-[10px] sm:text-xs mb-1">Total payé</p>
        <p class="text-brand text-xl sm:text-2xl font-bold">50 000 F</p>
      </div>
      <div class="bg-white border border-gray-200 rounded-lg p-4">
        <p class="text-grayText text-[10px] sm:text-xs mb-1">Reste à payer</p>
        <p class="text-brand text-xl sm:text-2xl font-bold">10 000 F</p>
      </div>
    </div>

    <div class="bg-orangeLight border border-orange-300 rounded-lg px-4 py-3 mb-6">
      <p class="text-orange text-xs sm:text-sm font-bold">⚠ Retard sur Semaine 5 et Semaine 8</p>
      <p class="text-grayText text-[10px] sm:text-xs">2 semaines en retard — Total dû : 10 000 F</p>
    </div>

    <div class="flex gap-3 mb-6">
      <button class="bg-brand text-white text-xs sm:text-sm font-bold px-4 py-2 rounded-full">Cotisation Hebdo</button>
      <button class="bg-gray-200 text-grayText text-xs sm:text-sm font-medium px-4 py-2 rounded-full">Événement en cours</button>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <div class="bg-white rounded-lg p-5">
        <h3 class="text-dark text-sm sm:text-base font-bold mb-4">Mes retards</h3>
        <table class="w-full text-left">
          <thead>
            <tr class="border-b border-gray-200">
              <th class="pb-2 text-grayText text-xs font-medium">Semaine</th>
              <th class="pb-2 text-grayText text-xs font-medium">Montant</th>
              <th class="pb-2 text-grayText text-xs font-medium">Statut</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-gray-100">
              <td class="py-3 text-dark text-sm">Semaine 5</td>
              <td class="py-3 text-brand text-sm font-bold">5 000 F</td>
              <td class="py-3 text-orange text-xs font-medium">Non payé</td>
            </tr>
            <tr>
              <td class="py-3 text-dark text-sm">Semaine 8</td>
              <td class="py-3 text-brand text-sm font-bold">5 000 F</td>
              <td class="py-3 text-orange text-xs font-medium">Non payé</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="bg-white rounded-lg p-5">
        <h3 class="text-dark text-sm sm:text-base font-bold mb-4">Derniers paiements</h3>
        <table class="w-full text-left">
          <thead>
            <tr class="border-b border-gray-200">
              <th class="pb-2 text-grayText text-xs font-medium">Libellé</th>
              <th class="pb-2 text-grayText text-xs font-medium">Montant</th>
              <th class="pb-2 text-grayText text-xs font-medium">Statut</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b border-gray-100">
              <td class="py-3 text-dark text-sm">Sem 10 — Hebdo</td>
              <td class="py-3 text-brand text-sm font-bold">5 000 F</td>
              <td class="py-3 text-brand text-xs font-medium">Payé</td>
            </tr>
            <tr class="border-b border-gray-100">
              <td class="py-3 text-dark text-sm">Sem 9 — Hebdo</td>
              <td class="py-3 text-brand text-sm font-bold">5 000 F</td>
              <td class="py-3 text-brand text-xs font-medium">Payé</td>
            </tr>
            <tr>
              <td class="py-3 text-dark text-sm">Anniv. — Événement</td>
              <td class="py-3 text-brand text-sm font-bold">1 000 F</td>
              <td class="py-3 text-brand text-xs font-medium">Payé</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>
</html>
