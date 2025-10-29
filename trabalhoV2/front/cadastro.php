<?php
session_start();
include_once "back_php/conection.php";
$mensagem = "";

if (isset($_POST['submit_cadastro'])) {
    $cpf = $_POST["cpf_cadastro"];
    $nome = $_POST["nome_cadastro"];
    $senha = $_POST["senha_cadastro"];
    $result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE cpf = '$cpf'");
    $row1 = mysqli_num_rows($result);

    if ($row1 >= 1) {
        $mensagem = "CPF já cadastrado";
    } else {
        $result = mysqli_query($conexao, "insert into usuarios (nome, cpf, senha) values ('$nome', '$cpf', '$senha')");
        $_SESSION['nome'] = $nome;
        header("Location: front/home.php");
        exit;
    }
}

if (isset($_POST['submit_login'])) {
    $cpf = $_POST["cpf_login"];
    $senha = $_POST["senha_login"];
    $result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'");
    $row2 = mysqli_num_rows($result);

    if ($row2 >= 1) {
        $dados = mysqli_fetch_assoc($result); // pega o nome do usuário
        $_SESSION['nome'] = $dados['nome'];   // guarda na sessão
        header("Location: front/home.php");
        exit;
    } else {
        $mensagem = "CPF ou senha incorretos";
    }
}
?>



<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Clínica Universitária</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script>
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
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">

            <!-- LAYOUT -->
            <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7eff3] dark:border-b-background-dark/20 px-4 sm:px-10 py-3 fixed top-0 left-0 right-0 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm z-50">
                <div class="flex items-center gap-4 text-[#0d171b] dark:text-white">
                    <div class="size-6 text-primary">
                        <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 6H42L36 24L42 42H6L12 24L6 6Z" fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#0d171b] dark:text-white text-lg font-bold leading-tight tracking-[-0.015em]">Clínica Universitária</h2>
                </div>
                <div class="hidden md:flex flex-1 justify-end gap-8">
                    <div class="flex items-center gap-9">
                        <a class="text-[#0d171b] dark:text-white text-sm font-medium leading-normal" href="#">Início</a>
                        <a class="text-[#0d171b] dark:text-white text-sm font-medium leading-normal" href="#">Sobre Nós</a>
                        <a class="text-[#0d171b] dark:text-white text-sm font-medium leading-normal" href="#">Especialidades</a>
                        <a class="text-[#0d171b] dark:text-white text-sm font-medium leading-normal" href="#">Contato</a>
                    </div>
                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-colors">
                        <span class="truncate">Login/Cadastro</span>
                    </button>
                </div>
                <button class="md:hidden flex items-center justify-center size-10 rounded-lg bg-primary/10 text-primary">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </header>
            <!-- LAYOUT -->

            <!-- CORPO DO SITE -->
            <main class="pt-16">

                <!-- IMAGEM PROMOCIONAL -->
                <div class="px-4 md:px-10 lg:px-20 xl:px-40 flex flex-1 justify-center py-5">
                    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        <div class="@container">
                            <div class="@[480px]:p-4">
                                <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-4 text-center" data-alt="students in a modern university clinic" style='background-image: linear-gradient(rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuB2GFNPl7GKi5VFjrKmLfttrk0ziEguzEGNau4-CKUwPXaSgoeRalgnmrMgHiiRalyb9m69B6dIczFndiqx-QxDrAnr1wfwK6tbziuXisodZoQFfeRLDVLJNeiKypUZY50gtXpWU56FarB7xcYxb8CxYQ5Cld_X2ZZivmkaWu8JGk78MC8vFRRR88zWCALT71_S9barVI7UZejNUrcnmIoq9TLCM-zuluTcRCp7wrV5QMrQRvs2z32QthTj6J_pW893mFtfI9PGBCtw");'>
                                    <div class="flex flex-col gap-2">
                                        <h1 class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl">
                                            Sua Saúde em Boas Mãos: Agende na Clínica Universitária.
                                        </h1>
                                        <h2 class="text-white/90 text-sm font-normal leading-normal @[480px]:text-base">
                                            Atendimento de qualidade realizado por futuros profissionais sob a supervisão de professores experientes.
                                        </h2>
                                    </div>
                                    <button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base hover:bg-primary/90 transition-colors">
                                        <span class="truncate">Agende sua Consulta</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- IMAGEM PROMOCIONAL -->

                <!-- ÁREAS DE ATENDIMANTOS -->
                <div class="px-4 md:px-10 lg:px-20 xl:px-40 flex flex-1 justify-center py-5">
                    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        <h2 class="text-[#0d171b] dark:text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Nossas Áreas de Atendimento</h2>
                        <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-4 p-4">
                            <div class="flex flex-col gap-3 pb-3 group cursor-pointer">
                                <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg relative overflow-hidden transform transition-transform duration-300 group-hover:scale-105" data-alt="Medical equipment for general medicine" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAp4NX4Vx5T4NDWEvHfuBhF7xEQ1dHRCj-zio_uU9dzo16Wz9vYdvlaY_prxXm5TGZwYohecUl7FIIaXtTcIWSlTsttKyY5jt9ByhGE8glH27ZNivJt1dS-09v7Q7kAi_6IsEoX-4uSzKvWOX2eiT0mc2AMqGId8mASClS_B1VMyhGATbyUWSwJYQ2IST7lmc8Cvy8geeuEa2k828EqREyuaGLPM0XQiQKA9P-dj11dIe-My1y8x2mDf72lpVuZJDgnkKYzx9YXZvDk");'>
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center">
                                        <button class="flex min-w-[84px] max-w-[480px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold">
                                            <span class="truncate">Agendar Agora</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-[#0d171b] dark:text-white text-base font-medium leading-normal">Medicina Geral</p>
                                    <p class="text-[#4c809a] dark:text-gray-400 text-sm font-normal leading-normal">Cuidados primários e acompanhamento contínuo da sua saúde.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 pb-3 group cursor-pointer">
                                <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg relative overflow-hidden transform transition-transform duration-300 group-hover:scale-105" data-alt="Dental tools on a tray" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCZWWGBNSsbJ40XkP4oGYbhTMFaq0wowc7jkSZLlxj6bkaddmSBnlSAAz9gET02yIlfcbvLvTMRpvE5YRnMRfu9AjSJumI2X5bPV-y2_bvXXQLTtAwE9RFEedgh6IDWWgIvhKgiu8H4vjkuT3d9hVnruREfhB9vZlaZlthM89TGz-yO34qtNO1BVC8WFuXw_SbAcmiDl-7rA5PKSlcZuBEZZ4x-yzsxFCnvb0HvHxVg4DyWL2GPJue0pR__GNPAbV99bzCVOeyDkG5J");'>
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center">
                                        <button class="flex min-w-[84px] max-w-[480px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold">
                                            <span class="truncate">Agendar Agora</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-[#0d171b] dark:text-white text-base font-medium leading-normal">Odontologia</p>
                                    <p class="text-[#4c809a] dark:text-gray-400 text-sm font-normal leading-normal">Tratamentos completos para a saúde do seu sorriso.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 pb-3 group cursor-pointer">
                                <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg relative overflow-hidden transform transition-transform duration-300 group-hover:scale-105" data-alt="Two people in a therapy session" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDrWys3I_PeeLlFxMbnXz_HkFJKhBQAHu_Q_N06OnsMqZonsNe30oAbSV11rKr6Fhl3INETEorKxpFWk-fwv3qABZLPDj7zvF5_aUU43K0UWso7gbLG7k5UhV04EMynetlhmx7dw_vpM57Ey4KKqeAjR8VHHnuDar9PcMLBS2JJPS5ezrIdnPGIGkJ5T47HdpHABB4BnZ1VoSAvhxOBiofLJxNb6Er8rF2Y2heKkPKIJGGdXc-XOV9HDwfYCM7ziZyBkNGJ2NOn_U51");'>
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center">
                                        <button class="flex min-w-[84px] max-w-[480px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold">
                                            <span class="truncate">Agendar Agora</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-[#0d171b] dark:text-white text-base font-medium leading-normal">Psicologia</p>
                                    <p class="text-[#4c809a] dark:text-gray-400 text-sm font-normal leading-normal">Apoio para o seu bem-estar mental e emocional.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 pb-3 group cursor-pointer">
                                <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg relative overflow-hidden transform transition-transform duration-300 group-hover:scale-105" data-alt="Physiotherapist assisting a patient" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMaQQ1eQSAOlVLj4WWSFmvg7u2dsvZJgUgmkTV1Yu7eA36rvICWbPviie1gmYepiU38xFpKXMtVwqgF2xZOD0pkems38CwtIprczDQrtSkBjMHwCxyobFDbJwFTnedJ28c53loYmxuRUEiCSRe8nnUSid-aeE-Zj8ggqoLQmIjiS42gHBH8twcEHZ1yE9k4kbED_bSB3Q3iQFQQStL1SoI8glZ0z3jwL2MCiPi8WD7fLtBOeNQ2vkJqYOTkTbDsRTd6KJ4vjMI5voz");'>
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center">
                                        <button class="flex min-w-[84px] max-w-[480px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold">
                                            <span class="truncate">Agendar Agora</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-[#0d171b] dark:text-white text-base font-medium leading-normal">Fisioterapia</p>
                                    <p class="text-[#4c809a] dark:text-gray-400 text-sm font-normal leading-normal">Reabilitação e prevenção de lesões corporais.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 pb-3 group cursor-pointer">
                                <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg relative overflow-hidden transform transition-transform duration-300 group-hover:scale-105" data-alt="Healthy food bowl" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuACgBUS6IYOwABUWAs_p_OvuG6ZJB_Uw22ABdTUHkULYVjPvfNLEEeYpCtzLsJRQM5FMnCU520HLFQHPBjJoN3KXL6kjapH7p7jYElzPBuyoGyXhHqhlFz8aPMH3IvIG-UD5fDcFDE5VKjZBXkWxMX-EhGqLQtjkJjfvI6gzC0ip0U6ILb51iX_kAOBnvk4tukPWHrUStY0tPwrieJ53fXw4QXDToPdQjFhgY5S8npSwNvOO0eNu82WaFK-FoX3JX_Bxzl15UANgl8J");'>
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center">
                                        <button class="flex min-w-[84px] max-w-[480px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold">
                                            <span class="truncate">Agendar Agora</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-[#0d171b] dark:text-white text-base font-medium leading-normal">Nutrição</p>
                                    <p class="text-[#4c809a] dark:text-gray-400 text-sm font-normal leading-normal">Planos alimentares personalizados para sua saúde.</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 pb-3 group cursor-pointer">
                                <div class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg relative overflow-hidden transform transition-transform duration-300 group-hover:scale-105" data-alt="Speech therapy session" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB_dQKWwadKY8acD4foCuspOaAItrafOZBSHwNo9gjw0crSY83kagWq3JGNotiJLzJV5t1km77Ch0acuSc8jYnEBxLe3zfqDQlpu9m45iWtJ6gM9tS07P9gbjt0LsPFOAyluMPsIspKcHdixTyGkkE8xfG17AIcMlN-OvxiVxZbeJL1uO1kXDfGCBnbjYuDNt08-_mTWKoyAcm_CSrwT4nuImpjobSiL2OQyT1iG2OnVTPzLIGBMcvgrP5A6d51Z2Rge4O9y1u0iXTi");'>
                                    <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition-colors duration-300 flex items-center justify-center">
                                        <button class="flex min-w-[84px] max-w-[480px] opacity-0 group-hover:opacity-100 transition-opacity duration-300 cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold">
                                            <span class="truncate">Agendar Agora</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <p class="text-[#0d171b] dark:text-white text-base font-medium leading-normal">Fonoaudiologia</p>
                                    <p class="text-[#4c809a] dark:text-gray-400 text-sm font-normal leading-normal">Cuidados com a comunicação, audição e fala.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ÁREAS DE ATENDIMANTOS -->

                <!-- PASSO A PASSO -->
                <div class="px-4 md:px-10 lg:px-20 xl:px-40 flex flex-1 justify-center py-10 bg-primary/5 dark:bg-primary/10">
                    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        <h2 class="text-[#0d171b] dark:text-white text-center text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-8">Agende sua Consulta em 3 Passos Simples</h2>
                        <div class="grid md:grid-cols-3 gap-8 px-4 text-center">
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center size-16 rounded-full bg-primary text-white">
                                    <span class="material-symbols-outlined text-3xl">medical_services</span>
                                </div>
                                <h3 class="text-[#0d171b] dark:text-white text-lg font-bold">1. Escolha</h3>
                                <p class="text-[#4c809a] dark:text-gray-400 text-sm">Selecione a especialidade que você precisa e veja os profissionais disponíveis.</p>
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center size-16 rounded-full bg-primary text-white">
                                    <span class="material-symbols-outlined text-3xl">calendar_month</span>
                                </div>
                                <h3 class="text-[#0d171b] dark:text-white text-lg font-bold">2. Selecione</h3>
                                <p class="text-[#4c809a] dark:text-gray-400 text-sm">Escolha a melhor data e horário para a sua consulta na agenda online.</p>
                            </div>
                            <div class="flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center size-16 rounded-full bg-primary text-white">
                                    <span class="material-symbols-outlined text-3xl">check_circle</span>
                                </div>
                                <h3 class="text-[#0d171b] dark:text-white text-lg font-bold">3. Confirme</h3>
                                <p class="text-[#4c809a] dark:text-gray-400 text-sm">Revise os detalhes e confirme seu agendamento. Simples e rápido!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PASSO A PASSO -->

                <!-- RODAPÉ  -->
                <footer class="bg-gray-100 dark:bg-background-dark/50 py-10">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-4 gap-8 text-[#0d171b] dark:text-white">
                        <div>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="size-6 text-primary">
                                    <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 6H42L36 24L42 42H6L12 24L6 6Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <h2 class="text-lg font-bold">Clínica Universitária</h2>
                            </div>
                            <p class="text-sm text-[#4c809a] dark:text-gray-400">Cuidando da sua saúde com a excelência do ensino.</p>
                        </div>
                        <div>
                            <h3 class="font-bold mb-4">Links Rápidos</h3>
                            <ul class="space-y-2 text-sm">
                                <li><a class="text-[#4c809a] dark:text-gray-400 hover:text-primary" href="#">Início</a></li>
                                <li><a class="text-[#4c809a] dark:text-gray-400 hover:text-primary" href="#">Sobre Nós</a></li>
                                <li><a class="text-[#4c809a] dark:text-gray-400 hover:text-primary" href="#">Especialidades</a></li>
                                <li><a class="text-[#4c809a] dark:text-gray-400 hover:text-primary" href="#">Contato</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-bold mb-4">Contato</h3>
                            <address class="text-sm not-italic space-y-2 text-[#4c809a] dark:text-gray-400">
                                <p>Av. Universitária, 1234, Cidade Universitária</p>
                                <p>Telefone: (11) 5555-4444</p>
                                <p>Email: contato@clinicauniversitaria.edu</p>
                            </address>
                        </div>
                        <div>
                            <h3 class="font-bold mb-4">Redes Sociais</h3>
                            <div class="flex space-x-4">
                                <a class="text-[#4c809a] dark:text-gray-400 hover:text-primary" href="#"><svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewbox="0 0 24 24">
                                        <path clip-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" fill-rule="evenodd"></path>
                                    </svg></a>
                                <a class="text-[#4c809a] dark:text-gray-400 hover:text-primary" href="#"><svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewbox="0 0 24 24">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                                    </svg></a>
                                <a class="text-[#4c809a] dark:text-gray-400 hover:text-primary" href="#"><svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewbox="0 0 24 24">
                                        <path clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 4.758 3.234 8.74 7.545 9.873-.01-.114-.02-.314-.01-.523.01-.252.12-.983.17-1.19.05-.207.33-.84.33-.84s-.08-.16-.08-.39c0-.36.21-.63.46-.63.22 0 .32.17.32.38 0 .23-.15.58-.22.9-.07.31.15.56.45.56.54 0 .99-.57.99-1.4 0-1.15-.81-1.95-1.74-1.95-1.22 0-2.06.9-2.06 2.05 0 .24.08.5.18.66l-.18 1.15s-.47-1.97-.58-2.31c-.18-.55-.02-1.18.3-1.57.28-.35.73-.45.98-.35.3.12.49.4.59.57.23.4.15.75.11.96-.04.22-.11.45-.16.63-.05.18-.15.35-.15.35s.28-1.18.35-1.46c.12-.49.58-.93.99-.93.78 0 1.36.7 1.36 1.76 0 1.05-.39 1.83-1.01 1.83-.21 0-.4-.18-.47-.38a11.355 11.355 0 01-.3-1.35c-.06-.29.08-.55.26-.71.18-.16.39-.2.53-.12.2.12.27.35.23.58-.04.28-.27 1.12-.27 1.12s.15.65.65.65c.78 0 1.43-1.04 1.43-2.52 0-2.1-1.55-3.53-3.75-3.53-2.58 0-4.14 1.87-4.14 3.93 0 .75.29 1.52.65 1.85.07.06.08.12.06.21l-.23.89c-.02.08-.11.11-.18.06-1.01-.55-1.49-1.92-1.49-3.23 0-2.45 1.76-4.52 4.96-4.52 2.65 0 4.63 1.86 4.63 4.22 0 2.76-1.53 4.92-3.79 4.92-.72 0-1.39-.37-1.62-.82z" fill-rule="evenodd"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 border-t border-gray-300 dark:border-gray-700 pt-6 text-center text-sm text-[#4c809a] dark:text-gray-400">
                        <p>© 2024 Clínica Universitária. Todos os direitos reservados. | <a class="hover:text-primary" href="#">Termos de Uso</a> | <a class="hover:text-primary" href="#">Política de Privacidade</a></p>
                    </div>
                </footer>
                <!-- RODAPÉ  -->

            </main>
            <!-- CORPO DO SITE -->


            <form action="" method="post" class="bg-blue-500">
                <div>
                    <h1>cadastro</h1>
                </div>
                <div>
                    <input type="text" name="nome">
                    <input type="text" name="cpf">
                    <input type="password" name="senha">
                </div>
                <div>
                    <button type="submit">olá</button>
                </div>

            </form>
            <form action="" method="post" class="bg-yellow-500 w-24">
                <div>
                    <h1>login</h1>
                </div>
                <div>
                    <input type="text" name="nome">
                    <input type="text" name="cpf">
                    <input type="password" name="senha">
                </div>
                <div>
                    <button type="submit">oi</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>