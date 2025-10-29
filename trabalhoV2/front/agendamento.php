<?php
session_start();
include "../back_php/conection.php";

$nome = $_SESSION['nome'];
$clinica = $_GET['clinica'] ?? '';

$result = mysqli_query($conexao, "SELECT serviço,data ,horario FROM agendamento WHERE clinica='$clinica'");
$row = mysqli_fetch_assoc($result);
/* echo $row['serviço'] ."<br>";
echo $row['data'] ."<br>";
echo $row['horario']; */

if ($clinica == 'odontologia') {
    $servicos = ["Limpeza dental", "Clareamento", "Restaurações", "Tratamento de canal", "Implantes", "Ortodontia"];
} elseif ($clinica == 'estetica') {
    $servicos = ["Limpeza de pele", "Peeling", "Microagulhamento", "Design de sobrancelhas", "Massagem modeladora", "Lipólise"];
} elseif ($clinica == 'psicologia') {
    $servicos = ["Psicoterapia individual", "Terapia de casal", "Orientação vocacional", "Avaliação psicológica", "Psicoterapia em grupo", "Apoio em transtornos"];
} elseif ($clinica == 'nutricao') {
    $servicos = ["Avaliação nutricional", "Planejamento alimentar", "Reeducação alimentar", "Emagrecimento", "Nutrição esportiva", "Condições clínicas"];
} elseif ($clinica == 'fisioterapia') {
    $servicos = ["Reabilitação ortopédica", "Fisioterapia respiratória", "Fisioterapia neurológica", "Tratamento de dores", "Fisioterapia pélvica", "Pilates terapêutico"];
} elseif ($clinica == 'veterinaria') {
    $servicos = ["Consultas e vacinas", "Exames laboratoriais", "Cirurgias", "Castração", "Emergências", "Nutrição para pets"];
} else {
    $servicos = [];  // Caso a clínica não seja reconhecida, podemos deixar o array vazio
}

if (isset($_POST["submit_b1"])) {
    $clinica = $_POST['clinica'];
    $servico = $_POST["servico"];
    $data = $_POST["data"];
    $horario = $_POST["horario"];
    $paciente = $_POST["nome_paciente"];
    $result = mysqli_query($conexao, "insert into agendamento (clinica, serviço, data, horario, paciente) values ('$clinica', '$servico', '$data', '$horario', '$paciente')");
}


?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Agendamento de Consulta</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet" />
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
            <div class="px-4 md:px-20 lg:px-40 flex flex-1 justify-center py-10">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-gray-800 dark:text-gray-200 text-4xl font-black leading-tight tracking-[-0.033em] min-w-72">Agendamento de Consulta</p>
                    </div>
                    <div class="flex flex-col gap-6 p-4">
                        <div class="flex flex-col gap-3">
                            <div class="flex gap-6 justify-between">
                                <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal">Passo 1 de 3</p>
                            </div>
                            <div class="rounded bg-gray-200 dark:bg-gray-700">
                                <div class="h-2 rounded bg-primary" style="width: 33%;"></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="flex flex-col gap-6">
                                <div>
                                    <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Escolha a Data da Consulta</p>
                                    <div class="flex min-w-72 max-w-full flex-1 flex-col gap-0.5 bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                        <div class="flex items-center justify-between p-1">
                                            <button>
                                                <span class="material-symbols-outlined text-gray-800 dark:text-gray-200">chevron_left</span>
                                            </button>
                                            <p class="text-gray-800 dark:text-gray-200 text-base font-bold leading-tight flex-1 text-center">Outubro 2023</p>
                                            <button>
                                                <span class="material-symbols-outlined text-gray-800 dark:text-gray-200">chevron_right</span>
                                            </button>
                                        </div>
                                        <div class="grid grid-cols-7">
                                            <p class="text-gray-800 dark:text-gray-400 text-[13px] font-bold leading-normal tracking-[0.015em] flex h-12 w-full items-center justify-center pb-0.5">D</p>
                                            <p class="text-gray-800 dark:text-gray-400 text-[13px] font-bold leading-normal tracking-[0.015em] flex h-12 w-full items-center justify-center pb-0.5">S</p>
                                            <p class="text-gray-800 dark:text-gray-400 text-[13px] font-bold leading-normal tracking-[0.015em] flex h-12 w-full items-center justify-center pb-0.5">T</p>
                                            <p class="text-gray-800 dark:text-gray-400 text-[13px] font-bold leading-normal tracking-[0.015em] flex h-12 w-full items-center justify-center pb-0.5">Q</p>
                                            <p class="text-gray-800 dark:text-gray-400 text-[13px] font-bold leading-normal tracking-[0.015em] flex h-12 w-full items-center justify-center pb-0.5">Q</p>
                                            <p class="text-gray-800 dark:text-gray-400 text-[13px] font-bold leading-normal tracking-[0.015em] flex h-12 w-full items-center justify-center pb-0.5">S</p>
                                            <p class="text-gray-800 dark:text-gray-400 text-[13px] font-bold leading-normal tracking-[0.015em] flex h-12 w-full items-center justify-center pb-0.5">S</p>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal col-start-4">
                                                <div class="flex size-full items-center justify-center rounded-full">1</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">2</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">3</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">4</div>
                                            </button>
                                            <button class="h-12 w-full text-white text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full bg-primary">5</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">6</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">7</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">8</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">9</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">10</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">11</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">12</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">13</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">14</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">15</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">16</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">17</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">18</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">19</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">20</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">21</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">22</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">23</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">24</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">25</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">26</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">27</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">28</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">29</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">30</div>
                                            </button>
                                            <button class="h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal">
                                                <div class="flex size-full items-center justify-center rounded-full">31</div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-6">
                                <label class="flex flex-col min-w-40 flex-1">
                                    <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Selecione o Horário</p>
                                    <select class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal">
                                        <option>Selecione um horário</option>
                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>11:00</option>
                                        <option>14:00</option>
                                        <option>15:00</option>
                                    </select>
                                </label>
                                <label class="flex flex-col min-w-40 flex-1">
                                    <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Selecione a Especialidade</p>
                                    <select class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal">
                                        <option>Selecione uma especialidade</option>
                                        <option>Cardiologia</option>
                                        <option>Dermatologia</option>
                                        <option>Clínica Geral</option>
                                        <option>Psicologia</option>
                                    </select>
                                </label>
                                <label class="flex flex-col min-w-40 flex-1">
                                    <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Escolha o Profissional</p>
                                    <select class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal" disabled="">
                                        <option>Selecione um profissional</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal">Informações Adicionais (Opcional)</p>
                            <textarea class="form-textarea w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 p-4 text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary" placeholder="Descreva brevemente o motivo da consulta" rows="4"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button class="bg-primary text-white font-bold py-3 px-6 rounded-lg hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                Confirmar Agendamento
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>