<?php
session_start();
include "../back_php/conection.php";

require_once __DIR__ . '/../libs/dompdf/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

date_default_timezone_set('America/Sao_Paulo');

// 🔹 Função de segurança
function safe($value)
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

// 🔹 Se o parâmetro 'download' = 'pdf', gera o arquivo
if (isset($_GET['download']) && $_GET['download'] === 'pdf') {
    $dia = safe($_GET['dia']);
    $hora = safe($_GET['hora']);
    $especialidade = safe($_GET['especialidade']);
    $atendimento = safe($_GET['atendimento']);
    $profissional = safe($_GET['profissional']);
    $nome_completo = safe($_GET['nome_completo']);
    $descricao = safe($_GET['descricao']);

    $html = "
    <style>
        body { font-family: 'DejaVu Sans', sans-serif; margin: 0; background-color: #f4f7fb; }
        .header {
            background-color: #0077cc;
            color: white;
            padding: 20px 40px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .header h1 { margin: 0; font-size: 26px; }
        .comprovante {
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            width: 80%;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
        }
        .conteudo {
            padding: 40px;
        }
        .conteudo p {
            font-size: 16px;
            margin: 12px 0;
            color: #333;
        }
        strong { color: #0077cc; }
        .footer {
            text-align: center;
            font-size: 13px;
            color: #777;
            padding: 20px;
        }
    </style>

    <div class='comprovante'>
        <div class='header'>
            <h1>Comprovante de Agendamento</h1>
        </div>
        <div class='conteudo'>
            <p><strong>📅 Data:</strong> {$dia}</p>
            <p><strong>⏰ Horário:</strong> {$hora}</p>
            <p><strong>🏥 Especialidade:</strong> {$especialidade}</p>
            <p><strong>🩺 Tipo de Atendimento:</strong> {$atendimento}</p>
            <p><strong>👨‍⚕️ Profissional:</strong> {$profissional}</p>
            <p><strong>👤 Nome Completo:</strong> {$nome_completo}</p>
            <p><strong>📝 Descrição:</strong> {$descricao}</p>
        </div>
        <div class='footer'>
            Emitido em " . date('d/m/Y H:i') . "
        </div>
    </div>
    ";

    $options = new Options();
    $options->set('isRemoteEnabled', true);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Comprovante_Agendamento.pdf", ["Attachment" => false]);
    exit;
}

// 🔹 Exibição HTML normal
$dia = $_GET['dia'] ?? '';
$hora = $_GET['hora'] ?? '';
$especialidade = $_GET['especialidade'] ?? '';
$atendimento = $_GET['atendimento'] ?? '';
$profissional = $_GET['profissional'] ?? '';
$nome_completo = $_GET['nome_completo'] ?? '';
$descricao = $_GET['descricao'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Comprovante de Agendamento</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(180deg, #e6f2ff, #ffffff);
            margin: 0;
            padding: 40px 0;
        }

        .container {
            width: 85%;
            max-width: 800px;
            background: #fff;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 3px solid #0077cc;
        }

        .header {
            background-color: #0077cc;
            color: #fff;
            text-align: center;
            padding: 30px 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 32px;
        }

        .content {
            padding: 40px 60px;
        }

        p {
            font-size: 18px;
            color: #333;
            margin: 12px 0;
        }

        strong {
            color: #005fa3;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-top: 25px;
        }

        .btn-baixar {
            display: block;
            text-align: center;
            background-color: #0077cc;
            color: #fff;
            padding: 16px 28px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
            margin: 30px auto 40px;
            width: fit-content;
            transition: 0.2s;
        }

        .btn-baixar:hover {
            background-color: #005fa3;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Comprovante de Agendamento</h1>
        </div>
        <div class="content">
            <p><strong>📅 Data:</strong> <?= safe($dia) ?></p>
            <p><strong>⏰ Horário:</strong> <?= safe($hora) ?></p>
            <p><strong>🏥 Especialidade:</strong> <?= safe($especialidade) ?></p>
            <p><strong>🩺 Tipo de Atendimento:</strong> <?= safe($atendimento) ?></p>
            <p><strong>👨‍⚕️ Profissional:</strong> <?= safe($profissional) ?></p>
            <p><strong>👤 Nome Completo:</strong> <?= safe($nome_completo) ?></p>
            <p><strong>📝 Descrição:</strong> <?= safe($descricao) ?></p>

            <p class="footer">Emitido em <?php echo date('d/m/Y H:i'); ?></p>

            <a class="btn-baixar"
                href="?download=pdf&dia=<?= urlencode($dia) ?>&hora=<?= urlencode($hora) ?>&especialidade=<?= urlencode($especialidade) ?>&atendimento=<?= urlencode($atendimento) ?>&profissional=<?= urlencode($profissional) ?>&descricao=<?= urlencode($descricao) ?>&nome_completo=<?= urlencode($nome_completo) ?>"
                target="_blank">
                📄 Baixar PDF
            </a>

        </div>
    </div>
</body>

</html>