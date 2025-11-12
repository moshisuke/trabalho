<?php
session_start();
include "../back_php/conection.php";

/* $nome = $_SESSION['nome']; */
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

        /* input[type="radio"]:checked+div {
            background-color: #2563eb;
            color: white;
        } */
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
                    <form action="teste.php" method="GET" class="flex flex-col gap-6 p-4">
                        <!-- <div class="flex flex-col gap-3">
                            <div class="flex gap-6 justify-between">
                                <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal">Passo 1 de 3</p>
                            </div>
                            <div class="rounded bg-gray-200 dark:bg-gray-700">
                                <div class="h-2 rounded bg-primary" style="width: 33%;"></div>
                            </div>
                        </div> -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="flex flex-col gap-6">
                                <div class="h-full">
                                    <div class="flex min-w-72 max-w-full h-full flex-1 flex-col justify-evenly gap-0.5 bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm">
                                        <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Selecione o dia</p>
                                        <input name="dia" type="date" class="w-full min-w-0
                                        rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 
                                        focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 
                                        bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] font-normal leading-normal" name="" id="">
                                        <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Selecione o Horário</p>
                                        <select name="hora" class="form-select flex w-full min-w-0 resize-none 
                                        overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 
                                        focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 
                                        bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal">
                                            <option>Selecione um horário</option>
                                            <option>08:00</option>
                                            <option>09:00</option>
                                            <option>10:00</option>
                                            <option>13:00</option>
                                            <option>14:00</option>
                                            <option>15:00</option>
                                        </select>
                                        <label class="flex flex-col min-w-40 flex-1">
                                            <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Selecione a Especialidade</p>
                                            <select name="especialidade" id="clinica_selecionada" class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal">
                                                <option value="">Selecione uma Especialidade</option>
                                                <option value="Odontologia">Odontologia</option>
                                                <option value="Estética">Estética</option>
                                                <option value="Psicologia">Psicologia</option>
                                                <option value="Nutrição">Nutrição</option>
                                                <option value="Fisioterapia">Fisioterapia</option>
                                                <option value="Veterinária">Veterinária</option>
                                            </select>
                                        </label>

                                        <!-- <div class="flex items-center justify-between p-1">
                                           
                                            <button onclick="voltar_mes()">
                                                <span class="material-symbols-outlined text-gray-800 dark:text-gray-200">chevron_left</span>
                                            </button>

                                            
                                            <div class="flex object-cover w-full">
                                                <section class='w-full min-w-[150px]'>
                                                    <p id="mes_calendario" class='text-gray-800 dark:text-gray-200 text-base font-bold leading-tight flex-1 text-center'>
                                                        <script>
                                                            document.write(meses[mesAtual] + " " + anoAtual);
                                                        </script>
                                                    </p>
                                                </section>

                                            </div>

                                            
                                            <button onclick="avancar_mes()">
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

                                            <script>
                                                for (let i = 0; i < 30; i++) {
                                                    document.write(`
                                                    <label for="day${i + 1}" class="cursor-pointer">
                                                    <input type="radio" name="day" value="${i + 1}" id="day${i + 1}" class="hidden">
                                                    <div class="flex items-center justify-center h-12 w-full text-gray-800 dark:text-gray-200 text-sm font-medium leading-normal hover:bg-blue-100 dark:hover:bg-blue-700 rounded-full transition">
                                                        ${i + 1}
                                                    </div>
                                                    </label>
                                                `);
                                                }
                                            </script>


                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-6">
                                <!-- <label class="flex flex-col min-w-40 flex-1">
                                    <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Selecione o Horário</p>
                                    <select name="time" class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal">
                                        <option>Selecione um horário</option>
                                        <option>08:00</option>
                                        <option>09:00</option>
                                        <option>10:00</option>
                                        <option>13:00</option>
                                        <option>14:00</option>
                                        <option>15:00</option>
                                    </select>
                                </label> -->


                                <label class="flex flex-col min-w-40 flex-1">
                                    <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Escolha o atendimento</p>
                                    <select name="atendimento" id="operacao_select" class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal">
                                        <option>Selecione um atendimento</option>
                                    </select>
                                </label>
                                <label class="flex flex-col min-w-40 flex-1">
                                    <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">Escolha o Profissional</p>
                                    <select name="profissional" id="profissional_select" class="form-select flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal">
                                        <option>Selecione um profissional</option>
                                    </select>
                                </label>

                                <script>
                                    const clinicaSelect = document.getElementById('clinica_selecionada');
                                    const profissionalSelect = document.getElementById('profissional_select');
                                    const operacaoSelect = document.getElementById('operacao_select');

                                    // Lista de serviços (operações)
                                    const operacoes = {
                                        'Odontologia': ['Limpeza dental', 'Clareamento', 'Restaurações', 'Tratamento de canal', 'Implantes', 'Ortodontia'],
                                        'Estética': ['Limpeza de pele', 'Peeling', 'Microagulhamento', 'Design de sobrancelhas', 'Massagem modeladora', 'Lipólise'],
                                        'Psicologia': ['Psicoterapia individual', 'Terapia de casal', 'Orientação vocacional', 'Avaliação psicológica', 'Psicoterapia em grupo', 'Apoio em transtornos'],
                                        'Nutrição': ['Avaliação nutricional', 'Planejamento alimentar', 'Reeducação alimentar', 'Emagrecimento', 'Nutrição esportiva', 'Condições clínicas'],
                                        'Fisioterapia': ['Reabilitação ortopédica', 'Fisioterapia respiratória', 'Fisioterapia neurológica', 'Tratamento de dores', 'Fisioterapia pélvica', 'Pilates terapêutico'],
                                        'Veterinária': ['Consultas e vacinas', 'Exames laboratoriais', 'Cirurgias', 'Castração', 'Emergências', 'Nutrição para pets'],
            
                                    };

                                    // Lista de profissionais
                                    const profissionais = {
                                        'Odontologia': ['João', 'Paula', 'Fernanda'],
                                        'Estética': ['Camila', 'Rafaela', 'Sérgio'],
                                        'Psicologia': ['Isis', 'Yuri', 'Eduarda'],
                                        'Nutrição': ['Laura', 'Bruno', 'Tatiane'],
                                        'Fisioterapia': ['Bruna', 'Léo', 'Caio'],
                                        'Veterinária': ['Sofia', 'Rafa', 'Lucas']
                                    };

                                    // Evento de mudança da clínica
                                    clinicaSelect.addEventListener('change', () => {
                                        const clinica = clinicaSelect.value;

                                        // Limpa os selects
                                        operacaoSelect.innerHTML = '<option>Selecione um atendimento</option>';
                                        profissionalSelect.innerHTML = '<option>Selecione um profissional</option>';

                                        // Preenche os serviços
                                        if (operacoes[clinica]) {
                                            operacoes[clinica].forEach(servico => {
                                                const opt = document.createElement('option');
                                                opt.textContent = servico;
                                                opt.value = servico;
                                                operacaoSelect.appendChild(opt);
                                            });
                                        }

                                        // Preenche os profissionais
                                        if (profissionais[clinica]) {
                                            profissionais[clinica].forEach(nome => {
                                                const opt = document.createElement('option');
                                                opt.textContent = nome;
                                                opt.value = nome;
                                                profissionalSelect.appendChild(opt);
                                            });
                                        }
                                    });
                                </script>


                                <label>
                                    <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal pb-2">digite o nome completo</p>
                                    <input name="nome_completo" type="text" class="flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 h-14 placeholder:text-gray-400 p-[15px] text-base font-normal leading-normal" name="" id="">
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <p class="text-gray-800 dark:text-gray-200 text-base font-medium leading-normal">Informações Adicionais (Opcional)</p>
                            <textarea name="descricao" class="form-textarea w-full rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 p-4 text-gray-800 dark:text-gray-200 focus:outline-0 focus:ring-2 focus:ring-primary" placeholder="Descreva brevemente o motivo da consulta" rows="4"></textarea>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit" class="bg-primary text-white font-bold py-3 px-6 rounded-lg hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                Confirmar Agendamento
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="../back_js/agendamento.js"></script>

</html>