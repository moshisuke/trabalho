<?php
session_start();
include "../back_php/conection.php";

$nome = $_SESSION['nome'];
$clinica = $_GET['clinica'] ?? '';

$result=mysqli_query($conexao, "SELECT serviço,data ,horario FROM agendamento WHERE clinica='$clinica'");
$row=mysqli_fetch_assoc($result);
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

if(isset($_POST["submit_b1"])){
    $clinica = $_POST['clinica'];
    $servico=$_POST["servico"];
    $data=$_POST["data"];
    $horario=$_POST["horario"];
    $paciente=$_POST["nome_paciente"];
    $result=mysqli_query($conexao, "insert into agendamento (clinica, serviço, data, horario, paciente) values ('$clinica', '$servico', '$data', '$horario', '$paciente')");
}







?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/agendamento.css">
    <title>Document</title>
</head>

<body>
    <header class="leyout">
        <a href="../front/home.php" class="logo">
            <img src="../imagens/logo.png" alt="Logo">
            Saúde+<br>Anhanguera
        </a>

        <div class="leyout_1">
            <!-- <a href="#">página inicial</a>
            <a href="#">minhas consultas</a>
            <a href="#">fale conosco</a> -->
        </div>

        <div class="leyout_2">
            <button><img src="../imagens/home_imgs/perfil.png" alt="Perfil"><br><?php echo $nome ?></button>
        </div>
    </header>
    <h1 class="instrução">selecione o serviço e preencha o formulário</h1>
    <main>

        <div class="clinicas">
            <input type="radio" name="serviço" id="serviço1" value="<?php echo $servicos[0] ?>" onclick="preencherTexto(this)" hidden>
            <label for="serviço1"><?php echo $servicos[0] ?></label>
            <input type="radio" name="serviço" id="serviço2" value="<?php echo $servicos[1] ?>" onclick="preencherTexto(this)" hidden>
            <label for="serviço2"><?php echo $servicos[1] ?></label>
            <input type="radio" name="serviço" id="serviço3" value="<?php echo $servicos[2] ?>" onclick="preencherTexto(this)" hidden>
            <label for="serviço3"><?php echo $servicos[2] ?></label>
            <input type="radio" name="serviço" id="serviço4" value="<?php echo $servicos[3] ?>" onclick="preencherTexto(this)" hidden>
            <label for="serviço4"><?php echo $servicos[3] ?></label>
            <input type="radio" name="serviço" id="serviço5" value="<?php echo $servicos[4] ?>" onclick="preencherTexto(this)" hidden>
            <label for="serviço5"><?php echo $servicos[4] ?></label>
            <input type="radio" name="serviço" id="serviço6" value="<?php echo $servicos[5] ?>" onclick="preencherTexto(this)" hidden>
            <label for="serviço6"><?php echo $servicos[5] ?></label>
        </div>


        <form action="" method="POST" class="agendamento_rapido">
            <h1 class="titulo">agendamento rápido</h1>
            <h2>clinica<br><input type="text" name="clinica" value="<?php echo $clinica ?>" readonly required></h2>
            <h2>serviço<br><input type="text" name="servico" class="serviço" readonly required></h2>
            <h2>data<br><input type="date" name="data" required></h2>
            <div class="horarios">
                <h2>horários</h2>
                <div class="opções_horarios">
                    <input type="radio" name="horario" id="08h" value="08h" hidden required>
                    <label for="08h">08:00h</label>

                    <input type="radio" name="horario" id="09h" value="09h" hidden>
                    <label for="09h">09:00h</label>

                    <input type="radio" name="horario" id="10h" value="10h" hidden>
                    <label for="10h">10:00h</label>

                    <input type="radio" name="horario" id="13h" value="13h" hidden>
                    <label for="13h">13:00h</label>

                    <input type="radio" name="horario" id="14h" value="14h" hidden>
                    <label for="14h">14:00h</label>

                    <input type="radio" name="horario" id="15h" value="15h" hidden>
                    <label for="15h">15:00h</label>

                </div>
            </div>
            <h2>paciente<br><input type="text" name="nome_paciente" required></h2>
            <div class="confirmar_limpar">
                <button type="submit" class="b1" name="submit_b1">confirmar agendamento</button>
                <button type="reset" class="b2">limpar seleção</button>
            </div>
        </form>
        </div>
    </main>
    
    <script src="../back_js/agendamento.js"></script>

</body>

</html>