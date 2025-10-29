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
                <div class="w-1/3">
                    <label class="flex flex-col w-full">
                        <div class="flex items-stretch w-full h-12 rounded-lg">
                            <div class="text-[#4c809a] flex bg-white dark:bg-gray-800 items-center justify-center pl-4 rounded-l-lg">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input class="w-full min-w-0 resize-none overflow-hidden rounded-r-lg text-[#0d171b] dark:text-background-light focus:outline-0 focus:ring-0 border-none bg-white dark:bg-gray-800 h-full placeholder:text-[#4c809a] dark:placeholder:text-gray-500 px-4 text-base font-normal leading-normal" placeholder="Buscar pacientes, prontuários..." value="" />
                        </div>
                    </label>
                </div>
            </header>
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                <div class="lg:col-span-2">
                    <section>
                        <h2 class="text-xl font-bold text-[#0d171b] dark:text-background-light mb-4">Resumo de Hoje</h2>
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                            <div class="p-6 bg-white rounded-xl dark:bg-gray-800">
                                <p class="text-base font-medium text-gray-600 dark:text-gray-300">Total de Agendamentos</p>
                                <p class="text-4xl font-bold text-primary">25</p>
                            </div>
                            <div class="p-6 bg-white rounded-xl dark:bg-gray-800">
                                <p class="text-base font-medium text-gray-600 dark:text-gray-300">Consultas Confirmadas</p>
                                <p class="text-4xl font-bold text-accent-green">18</p>
                            </div>
                            <div class="p-6 bg-white rounded-xl dark:bg-gray-800">
                                <p class="text-base font-medium text-gray-600 dark:text-gray-300">Cancelamentos</p>
                                <p class="text-4xl font-bold text-accent-red">2</p>
                            </div>
                        </div>
                    </section>
                    <section class="mt-8">
                        <h2 class="text-xl font-bold text-[#0d171b] dark:text-background-light mb-4">Aguardando Confirmação</h2>
                        <div class="p-6 bg-white rounded-xl dark:bg-gray-800">
                            <ul class="space-y-4">
                                <li class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium text-[#0d171b] dark:text-background-light">Carlos Pereira</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">14:00 - Dr. Silva</p>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-accent-green hover:bg-accent-green/90">Confirmar</button>
                                        <button class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-accent-orange hover:bg-accent-orange/90">Reagendar</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium text-[#0d171b] dark:text-background-light">Mariana Costa</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">15:30 - Dr. Ana Santos</p>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-accent-green hover:bg-accent-green/90">Confirmar</button>
                                        <button class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-accent-orange hover:bg-accent-orange/90">Reagendar</button>
                                    </div>
                                </li>
                                <li class="flex items-center justify-between">
                                    <div>
                                        <p class="font-medium text-[#0d171b] dark:text-background-light">Fernanda Lima</p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400">16:00 - Dr. Oliveira</p>
                                    </div>
                                    <div class="flex gap-2">
                                        <button class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-accent-green hover:bg-accent-green/90">Confirmar</button>
                                        <button class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-accent-orange hover:bg-accent-orange/90">Reagendar</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="mt-8">
                        <h2 class="text-xl font-bold text-[#0d171b] dark:text-background-light mb-4">Agenda de Hoje</h2>
                        <div class="p-6 bg-white rounded-xl dark:bg-gray-800">
                            <table class="w-full text-left">
                                <thead>
                                    <tr>
                                        <th class="p-2 text-sm font-semibold text-gray-500 dark:text-gray-400">Horário</th>
                                        <th class="p-2 text-sm font-semibold text-gray-500 dark:text-gray-400">Paciente</th>
                                        <th class="p-2 text-sm font-semibold text-gray-500 dark:text-gray-400">Profissional</th>
                                        <th class="p-2 text-sm font-semibold text-gray-500 dark:text-gray-400">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-2">09:00</td>
                                        <td class="p-2">João da Silva</td>
                                        <td class="p-2">Dr. Ribeiro</td>
                                        <td class="p-2"><span class="px-2 py-1 text-xs font-semibold text-white rounded-full bg-accent-green">Confirmado</span></td>
                                    </tr>
                                    <tr class="border-b dark:border-gray-700">
                                        <td class="p-2">10:30</td>
                                        <td class="p-2">Maria Oliveira</td>
                                        <td class="p-2">Dr. Ana Santos</td>
                                        <td class="p-2"><span class="px-2 py-1 text-xs font-semibold text-white rounded-full bg-accent-green">Confirmado</span></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">11:00</td>
                                        <td class="p-2">Pedro Martins</td>
                                        <td class="p-2">Dr. Silva</td>
                                        <td class="p-2"><span class="px-2 py-1 text-xs font-semibold text-white rounded-full bg-accent-red">Cancelado</span></td>
                                    </tr>
                                    <tr>
                                        <td class="p-2">14:00</td>
                                        <td class="p-2">Carlos Pereira</td>
                                        <td class="p-2">Dr. Silva</td>
                                        <td class="p-2"><span class="px-2 py-1 text-xs font-semibold text-white rounded-full bg-accent-orange">Pendente</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
                <div class="lg:col-span-1">
                    <section>
                        <h2 class="text-xl font-bold text-[#0d171b] dark:text-background-light mb-4">Acesso Rápido</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <button class="flex flex-col items-center justify-center p-6 bg-white rounded-xl dark:bg-gray-800 hover:bg-primary/10 dark:hover:bg-primary/30">
                                <span class="mb-2 text-4xl material-symbols-outlined text-primary">edit_calendar</span>
                                <span class="font-medium text-center text-[#0d171b] dark:text-background-light">Gerenciar Agenda</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-6 bg-white rounded-xl dark:bg-gray-800 hover:bg-primary/10 dark:hover:bg-primary/30">
                                <span class="mb-2 text-4xl material-symbols-outlined text-primary">person_search</span>
                                <span class="font-medium text-center text-[#0d171b] dark:text-background-light">Buscar Paciente</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-6 bg-white rounded-xl dark:bg-gray-800 hover:bg-primary/10 dark:hover:bg-primary/30">
                                <span class="mb-2 text-4xl material-symbols-outlined text-primary">forum</span>
                                <span class="font-medium text-center text-[#0d171b] dark:text-background-light">Comunicação</span>
                            </button>
                            <button class="flex flex-col items-center justify-center p-6 bg-white rounded-xl dark:bg-gray-800 hover:bg-primary/10 dark:hover:bg-primary/30">
                                <span class="mb-2 text-4xl material-symbols-outlined text-primary">assessment</span>
                                <span class="font-medium text-center text-[#0d171b] dark:text-background-light">Relatórios</span>
                            </button>
                        </div>
                    </section>
                    <section class="mt-8">
                        <h2 class="text-xl font-bold text-[#0d171b] dark:text-background-light mb-4">Últimas Atualizações</h2>
                        <div class="p-6 bg-white rounded-xl dark:bg-gray-800">
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <div class="mr-3 text-primary">
                                        <span class="material-symbols-outlined">person_add</span>
                                    </div>
                                    <div>
                                        <p class="text-sm text-[#0d171b] dark:text-background-light">Novo agendamento solicitado por <span class="font-semibold">Mariana Costa</span>.</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">há 5 minutos</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 text-primary">
                                        <span class="material-symbols-outlined">file_present</span>
                                    </div>
                                    <div>
                                        <p class="text-sm text-[#0d171b] dark:text-background-light"><span class="font-semibold">Dr. Silva</span> atualizou o prontuário de <span class="font-semibold">João da Silva</span>.</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">há 1 hora</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <div class="mr-3 text-primary">
                                        <span class="material-symbols-outlined">sms</span>
                                    </div>
                                    <div>
                                        <p class="text-sm text-[#0d171b] dark:text-background-light">Nova mensagem de <span class="font-semibold">Recepção</span>.</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">há 2 horas</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>
</body>

</html>