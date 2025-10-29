<?php
session_start();
$nome = $_SESSION['nome'];
?>

<!DOCTYPE html>

<html class="light" lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Seleção de Clínica</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#1193d4",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101c22",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
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

<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
            <div class="flex flex-1 justify-center">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <!-- TopNavBar -->
                    <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-700 px-10 py-3">
                        <div class="flex items-center gap-4 text-gray-900 dark:text-white">
                            <div class="size-6 text-primary">
                                <span class="material-symbols-outlined !text-4xl">
                                    health_and_safety
                                </span>
                            </div>
                            <h2 class="text-gray-900 dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Clínicas Universitárias</h2>
                        </div>
                        <div class="flex flex-1 justify-end gap-4 items-center">
                            <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors">
                                <span class="truncate">Sair</span>
                            </button>
                            <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="User profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBldtBic1FVSwS9pOOMdSSkZZkoZIs626zw-n_NLVT8hZYBzDx-0OEnI0-xNYQTzQUz2oEyrBMR0PXC5fDG1UI6MOM8y9Axiu76v1U4CshMKJG9B_t7sYD68ksl1pqDsxS15dWFvUuN0ekHRhQbFaX2XBF3Yn8tmDY9Uo17qylZXBbxPO3KcoHmPD8x3JJtsFW1YERo8Iy10jUkV1f9hyO3P9VlwDPpCgw25wSs-pAW9OSHddBTMi7b_c-tXvuKTNKSbGIZ_tpoOqR9");'></div>
                        </div>
                    </header>
                    <main class="px-4 md:px-10 py-5">
                        <!-- PageHeading -->
                        <div class="flex flex-wrap justify-between gap-3 p-4">
                            <p class="text-gray-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em] min-w-72">
                                Bem-vindo(a), Maria! Escolha a clínica para iniciar seu agendamento.
                            </p>
                        </div>
                        <!-- SearchBar and Filters -->
                        <div class="px-4 py-3 flex flex-col md:flex-row gap-4 items-center">
                            <label class="flex flex-col min-w-40 h-12 w-full">
                                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                                    <div class="text-[#4c809a] dark:text-gray-400 flex border-none bg-gray-100 dark:bg-gray-800 items-center justify-center pl-4 rounded-l-lg border-r-0">
                                        <span class="material-symbols-outlined">search</span>
                                    </div>
                                    <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-r-lg text-gray-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border-none bg-gray-100 dark:bg-gray-800 h-full placeholder:text-[#4c809a] dark:placeholder:text-gray-500 px-4 text-base font-normal leading-normal" placeholder="Buscar por nome, especialidade ou localização" value="" />
                                </div>
                            </label>
                        </div>
                        <div class="flex gap-3 p-4 overflow-x-auto">
                            <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-700 px-3 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                                <span class="material-symbols-outlined !text-base">tune</span>
                                <p class="text-gray-900 dark:text-white text-sm font-medium leading-normal">Filtros</p>
                            </button>
                            <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-700 px-3 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                                <p class="text-gray-900 dark:text-white text-sm font-medium leading-normal">Odontologia</p>
                            </button>
                            <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-700 px-3 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                                <p class="text-gray-900 dark:text-white text-sm font-medium leading-normal">Fisioterapia</p>
                            </button>
                            <button class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-200 dark:bg-gray-700 px-3 hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                                <p class="text-gray-900 dark:text-white text-sm font-medium leading-normal">Psicologia</p>
                            </button>
                        </div>
                        <!-- SectionHeader -->
                        <h2 class="text-gray-900 dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Clínicas Disponíveis</h2>
                        <!-- Clinics Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
                            <!-- Clinic Card 1 -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col">
                                <div class="h-40 bg-cover bg-center" data-alt="Abstract image representing dentistry" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC4d-QAQE-NGRa3o8iNQYdMAOF47RF7t760viwwlpvOWH_IO5j21JNvZCA4BYtocMUlFyon2QmlpMl7-XJRC0o6W3YaJEd_6M2TeCZVvSC5eTGxEN22L7RxCB6GprzukBDxsDWSXmaZkGvnm1hAwfYaiP0AJbRuHG36zTHsDFG4y1VW1FHhvcGRi_CIEuBSmiXrRBo5KX07GBXDnyp1HmUc50xokWpbYTHEass7hh_Mbuh9D06SSQJsGQhK9qUw08YLccJyYLfMNDzy')"></div>
                                <div class="p-6 flex flex-col flex-grow">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Clínica de Odontologia da Universidade X</h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Rua Exemplo, 123 - Centro</p>
                                    <div class="mt-4">
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-300">Especialidades:</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Clínica Geral, Ortodontia, Prótese.</p>
                                    </div>
                                    <div class="mt-auto pt-4">
                                        <button class="w-full flex items-center justify-center rounded-lg h-10 px-4 bg-primary/20 text-primary dark:bg-primary/30 dark:text-white text-sm font-bold hover:bg-primary/30 dark:hover:bg-primary/40 transition-colors">Agendar Agora</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Clinic Card 2 -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col">
                                <div class="h-40 bg-cover bg-center" data-alt="Abstract image representing physiotherapy" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDNiEXF6eaiVCGAJgP5PvE8pPsNQakgcCFH9lfv6l5WjEAxTXKM_jx8qT2zszoUnU4x7r2ozaLfnqaH7_l1XGuB9RJ3BRgmT8wGsE1VJNKEIVIFhMHBSDZ_ECY9Zuoc_OWr7J21vq4YClhFM5Bzma3Z5XnUKc5YxDikK_toi1MFgLXD_UlKIT_-ZiDpwUotUSAA3qmYwo0-Tz5WDPYlXVaCgr81Ey6SLaefgWwhKm7lIWtrJqMJ2ZNCu_fLpmcwL9XuwmeTYfmsBFeV')"></div>
                                <div class="p-6 flex flex-col flex-grow">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Clínica de Fisioterapia da Faculdade Y</h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Av. Modelo, 456 - Bairro Novo</p>
                                    <div class="mt-4">
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-300">Especialidades:</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Ortopédica, Neurológica, Desportiva.</p>
                                    </div>
                                    <div class="mt-auto pt-4">
                                        <button class="w-full flex items-center justify-center rounded-lg h-10 px-4 bg-primary/20 text-primary dark:bg-primary/30 dark:text-white text-sm font-bold hover:bg-primary/30 dark:hover:bg-primary/40 transition-colors">Agendar Agora</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Clinic Card 3 -->
                            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col">
                                <div class="h-40 bg-cover bg-center" data-alt="Abstract image representing psychology" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDi78G2b3etpPKNuz8B2A4iLdEI2EzjTFLkEo4ATtQ08K3baG68tdDm6c-PymNheBGdSSpWgTgA-QuRwdESCpOLDds2OL6-SGH07PsvAkKj5VA8v_2dqXYuJStwvNuE7S2dc0bMJd6FuwvMXjjLOJ69l7X28TFR_othkqkoegzyDSEQR9wnA0Pui_WYx-qyKCdQDQVkH29l3dcmXFRz8J7vtwZiTycrLX50Dkivp1Ko-ib_TDr7I0gdQGMO07sThzJ9oiPBUY4SxdAV')"></div>
                                <div class="p-6 flex flex-col flex-grow">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">Serviço de Psicologia Aplicada Z</h3>
                                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Praça Principal, 789 - Campus Universitário</p>
                                    <div class="mt-4">
                                        <p class="text-sm font-semibold text-gray-700 dark:text-gray-300">Especialidades:</p>
                                        <p class="text-sm text-gray-600 dark:text-gray-400">Terapia Cognitivo-Comportamental, Psicanálise, Avaliação Psicológica.</p>
                                    </div>
                                    <div class="mt-auto pt-4">
                                        <button class="w-full flex items-center justify-center rounded-lg h-10 px-4 bg-primary/20 text-primary dark:bg-primary/30 dark:text-white text-sm font-bold hover:bg-primary/30 dark:hover:bg-primary/40 transition-colors">Agendar Agora</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!-- Footer -->
                    <footer class="border-t border-solid border-gray-200 dark:border-gray-700 px-10 py-5 mt-10">
                        <div class="flex justify-center items-center text-sm text-gray-500 dark:text-gray-400 gap-6">
                            <a class="hover:text-primary transition-colors" href="#">Ajuda</a>
                            <a class="hover:text-primary transition-colors" href="#">Termos de Serviço</a>
                            <a class="hover:text-primary transition-colors" href="#">Contato</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>