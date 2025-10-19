<?php
session_start();
$nome = $_SESSION['nome'];
$clinica=$_GET['clinica']??'';

if ($clinica=='odontologi') {
    # code...
}

?>

<!DOCTYPE html>
<html lang="en">

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
            <input type="radio" name="serviço" id="serviço1" value="serviço1" onclick="preencherTexto(this)" hidden>
            <label for="serviço1">serviço</label>
            <input type="radio" name="serviço" id="serviço2" value="serviço2" onclick="preencherTexto(this)" hidden>
            <label for="serviço2">serviço</label>
            <input type="radio" name="serviço" id="serviço3" value="serviço3" onclick="preencherTexto(this)" hidden>
            <label for="serviço3">serviço</label>
            <input type="radio" name="serviço" id="serviço4" value="serviço4" onclick="preencherTexto(this)" hidden>
            <label for="serviço4">serviço</label>
            <input type="radio" name="serviço" id="serviço5" value="serviço5" onclick="preencherTexto(this)" hidden>
            <label for="serviço5">serviço</label>
            <input type="radio" name="serviço" id="serviço6" value="serviço6" onclick="preencherTexto(this)" hidden>
            <label for="serviço6">serviço</label>
        </div>


        <form action="agendamento.php" method="POST" class="agendamento_rapido">
            <h1 class="titulo">agendamento rápido</h1>
            <h2>clinica<br><input type="text" name="clinica" value="<?php echo $clinica ?>" readonly required></h2>
            <h2>serviço<br><input type="text" name="serviço" class="serviço" required></h2>
            <h2>data<br><input type="date" name="data" required></h2>
            <div class="horarios">
                <h2>horários</h2>
                <div class="opções_horarios">
                    <input type="radio" name="horario" id="h08" hidden required>
                    <label for="h08">08:00h</label>

                    <input type="radio" name="horario" id="h09" hidden>
                    <label for="h09">09:00h</label>

                    <input type="radio" name="horario" id="h10" hidden>
                    <label for="h10">10:00h</label>

                    <input type="radio" name="horario" id="h13" hidden>
                    <label for="h13">13:00h</label>

                    <input type="radio" name="horario" id="h14" hidden>
                    <label for="h14">14:00h</label>

                    <input type="radio" name="horario" id="h15" hidden>
                    <label for="h15">15:00h</label>

                </div>


            </div>
            <h2>paciente<br><input type="text" name="nome_paciente" required></h2>
            <div class="confirmar_limpar">
                <button type="submit" class="b1">confirmar agendamento</button>
                <button type="reset" class="b2">limpar seleção</button>
            </div>
        </form>
        </div>
    </main>
    
    <script src="../back_js/agendamento.js"></script>

</body>

</html>