<?php
session_start();
$nome = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/home.css">
    <title>Saúde+ Anhanguera</title>
</head>

<body>

    <!-- LAYOUT -->
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

    <!-- CARROSSEL -->
    <div class="carrossel">
        <div class="slides">
            <img src="../imagens/cadastro_modelos/img1.png" alt="">
            <img src="../imagens/cadastro_modelos/img2.png" alt="">
            <img src="../imagens/cadastro_modelos/img3.png" alt="">
        </div>

        <div class="botoes">
            <button class="btn" onclick="voltar()">&#10094;</button>
            <button class="btn" onclick="avancar()">&#10095;</button>
        </div>
    </div>

    <!-- PRINCIPAIS SERVIÇOS -->
    <h1 style="font-size: 50px;">escolha a clínica</h1>
    <section class="servicos">
        <a href="../front/agendamento.php?clinica=odontologia">
            <div class="card">
                <img src="../imagens/cadastro_modelos/img1.png" alt="">
                <div class="texto">
                    <p>Odontologia</p>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=estética">
            <div class="card">
                <img src="../imagens/cadastro_modelos/img1.png" alt="">
                <div class="texto">
                    <p>Estética</p>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=psicologia">
            <div class="card">
                <img src="../imagens/cadastro_modelos/img1.png" alt="">
                <div class="texto">
                    <p>psicologia</p>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=nutrição">
            <div class="card">
                <img src="../imagens/cadastro_modelos/img1.png" alt="">
                <div class="texto">
                    <p>nutrição</p>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=fisioterapia">
            <div class="card">
                <img src="../imagens/cadastro_modelos/img1.png" alt="">
                <div class="texto">
                    <p>fisioterapia</p>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=veterinária">
            <div class="card">
                <img src="../imagens/cadastro_modelos/img1.png" alt="">
                <div class="texto">
                    <p>veterinária</p>
                </div>
            </div>
        </a>
    </section>


    <div class="contato">
        <h1>Entre em contato conosco!</h1>
        <section>
            <h2>Telefone:## #########</h2>
            <h2>Email:qualquercoisa@gmail.com</h2>
            <h2>social: <img src=""><img src=""><img src=""></h2>
        </section>

    </div>

    <script src="../back_js/home.js"></script>

</body>

</html>