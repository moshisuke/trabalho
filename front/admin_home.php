<?php 


?>

<!DOCTYPE html>
<html class="light" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard - Clínica Universitária</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1193d4",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101c22",
                        "accent-orange": "#e67e22",
                        "accent-red": "#e74c3c",
                        "accent-green": "#2ecc71"
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-[#0d171b] dark:text-background-light">
    <div class="relative flex min-h-screen w-full">
        <aside class="flex h-screen flex-col w-64 bg-white dark:bg-background-dark border-r border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-center h-16 border-b border-gray-200 dark:border-gray-700">
                <h1 class="text-xl font-bold text-primary">Clínica Universitária</h1>
            </div>
            <nav class="flex flex-col gap-4 p-4 grow">
                <div class="flex items-center gap-3">
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Foto do Dr. Ana Santos" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuACNVlJjoNyVrVA3sBlgbD3O3oFFNrIINkbwoHSZAkHqNciYledFx0s4Qg7diI7f0JclMbMq6Wiw1CwtRe5MgWz_kzM9CDaG0AvQnRqBfEQIQZM88ay-6kiqMtCKDPnqHb62iOOep3ZvJQfO_MC5eEchKjunReySWd_2cSwdL5FncKYV3j6Ljhm1UVZ3yDFfxjIoLBVp5H1wvL2O9G4eq6sAgMfyPoufQduDONl-sgxfFg6RjTcUWHf0JtZtnIvHHZSRuQu0-eZrv2r");'></div>
                    <div class="flex flex-col">
                        <h1 class="text-base font-medium leading-normal text-[#0d171b] dark:text-background-light">Dr. Ana Santos</h1>
                        <p class="text-sm font-normal leading-normal text-gray-500 dark:text-gray-400">Clínica Universitária</p>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/20" href="#">
                        <span class="material-symbols-outlined text-primary">dashboard</span>
                        <p class="font-medium text-primary">Dashboard</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
                        <span class="material-symbols-outlined text-[#0d171b] dark:text-background-light">calendar_month</span>
                        <p class="font-medium text-[#0d171b] dark:text-background-light">Agendamentos</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
                        <span class="material-symbols-outlined text-[#0d171b] dark:text-background-light">group</span>
                        <p class="font-medium text-[#0d171b] dark:text-background-light">Pacientes</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
                        <span class="material-symbols-outlined text-[#0d171b] dark:text-background-light">chat</span>
                        <p class="font-medium text-[#0d171b] dark:text-background-light">Comunicação</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
                        <span class="material-symbols-outlined text-[#0d171b] dark:text-background-light">bar_chart</span>
                        <p class="font-medium text-[#0d171b] dark:text-background-light">Relatórios</p>
                    </a>
                </div>
                <div class="flex flex-col gap-1 mt-auto">
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
                        <span class="material-symbols-outlined text-[#0d171b] dark:text-background-light">settings</span>
                        <p class="font-medium text-[#0d171b] dark:text-background-light">Configurações</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
                        <span class="material-symbols-outlined text-[#0d171b] dark:text-background-light">help</span>
                        <p class="font-medium text-[#0d171b] dark:text-background-light">Ajuda</p>
                    </a>
                </div>
            </nav>
        </aside>
        <main class="flex-1 p-8 overflow-y-auto">
            <header class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-[#0d171b] dark:text-background-light">Bem-vindo(a), Ana!</h1>
                    <p class="text-gray-500 dark:text-gray-400">Aqui está um resumo do seu dia.</p>
                </div>
                <button class="flex items-center gap-2 px-6 py-3 font-medium text-white rounded-lg bg-primary hover:bg-primary/90">
                    <span class="material-symbols-outlined">calendar_month</span>
                    <span>Ver agendamentos</span>
                </button>
            </header>
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="flex flex-col p-6 bg-white rounded-xl dark:bg-gray-800">
                    <p class="mb-2 text-base font-medium text-gray-600 dark:text-gray-300">Total de Agendamentos para Hoje</p>
                    <p class="text-5xl font-bold text-primary">25</p>
                </div>
                <div class="flex flex-col p-6 bg-white rounded-xl dark:bg-gray-800">
                    <p class="mb-2 text-base font-medium text-gray-600 dark:text-gray-300">Consultas Confirmadas</p>
                    <p class="text-5xl font-bold text-accent-green">18</p>
                </div>
                <div class="flex flex-col p-6 bg-white rounded-xl dark:bg-gray-800">
                    <p class="mb-2 text-base font-medium text-gray-600 dark:text-gray-300">Aguardando Confirmação</p>
                    <p class="text-5xl font-bold text-accent-orange">5</p>
                </div>
            </div>
            <section class="mt-8">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-xl font-bold text-[#0d171b] dark:text-background-light">Próximos Pacientes</h2>
                    <a class="font-medium text-primary hover:underline" href="#">Ver todos</a>
                </div>
                <div class="p-6 bg-white rounded-xl dark:bg-gray-800">
                    <ul class="space-y-4">
                        <li class="flex items-center justify-between pb-4 border-b border-gray-200 dark:border-gray-700 last:border-b-0 last:pb-0">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10">
                                    <span class="text-xl font-bold text-primary">09:00</span>
                                </div>
                                <div>
                                    <p class="font-medium text-[#0d171b] dark:text-background-light">João da Silva</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Dr. Ribeiro</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold text-white rounded-full bg-accent-green">Confirmado</span>
                        </li>
                        <li class="flex items-center justify-between pb-4 border-b border-gray-200 dark:border-gray-700 last:border-b-0 last:pb-0">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10">
                                    <span class="text-xl font-bold text-primary">10:30</span>
                                </div>
                                <div>
                                    <p class="font-medium text-[#0d171b] dark:text-background-light">Maria Oliveira</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Dr. Ana Santos</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold text-white rounded-full bg-accent-green">Confirmado</span>
                        </li>
                        <li class="flex items-center justify-between pb-4 border-b border-gray-200 dark:border-gray-700 last:border-b-0 last:pb-0">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10">
                                    <span class="text-xl font-bold text-primary">14:00</span>
                                </div>
                                <div>
                                    <p class="font-medium text-[#0d171b] dark:text-background-light">Carlos Pereira</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Dr. Silva</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold text-white rounded-full bg-accent-orange">Pendente</span>
                        </li>
                        <li class="flex items-center justify-between pb-4 border-b border-gray-200 dark:border-gray-700 last:border-b-0 last:pb-0">
                            <div class="flex items-center gap-4">
                                <div class="flex items-center justify-center rounded-lg size-12 bg-primary/10">
                                    <span class="text-xl font-bold text-primary">15:30</span>
                                </div>
                                <div>
                                    <p class="font-medium text-[#0d171b] dark:text-background-light">Mariana Costa</p>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">Dr. Ana Santos</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 text-xs font-semibold text-white rounded-full bg-accent-orange">Pendente</span>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
</body>

</html>