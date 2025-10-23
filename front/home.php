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
            <img src="../imagens/home_imgs/img1.png" alt="">
            <img src="../imagens/home_imgs/img2.png" alt="">
            <img src="../imagens/home_imgs/img3.png" alt="">
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
                <img src="../imagens/home_imgs/img1.png" alt="">
                <div class="texto">
                    <p>Odontologia</p>
                    <ul>
                        <li>Limpeza dental</li>
                        <li>Clareamento</li>
                        <li>Restaurações</li>
                        <li>Tratamento de canal</li>
                        <li>Implantes</li>
                        <li>Ortodontia</li>
                    </ul>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=estetica">
            <div class="card">
                <img src="../imagens/home_imgs/img2.png" alt="">
                <div class="texto">
                    <p>Estética</p>
                    <ul>
                        <li>Limpeza de pele</li>
                        <li>Peeling</li>
                        <li>Microagulhamento</li>
                        <li>Design de sobrancelhas</li>
                        <li>Massagem modeladora</li>
                        <li>Lipólise</li>
                    </ul>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=psicologia">
            <div class="card">
                <img src="../imagens/home_imgs/img3.png" alt="">
                <div class="texto">
                    <p>Psicologia</p>
                    <ul>
                        <li>Psicoterapia individual</li>
                        <li>Terapia de casal</li>
                        <li>Orientação vocacional</li>
                        <li>Avaliação psicológica</li>
                        <li>Psicoterapia em grupo</li>
                        <li>Apoio em transtornos</li>
                    </ul>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=nutricao">
            <div class="card">
                <img src="../imagens/home_imgs/img4.png" alt="">
                <div class="texto">
                    <p>Nutrição</p>
                    <ul>
                        <li>Avaliação nutricional</li>
                        <li>Planejamento alimentar</li>
                        <li>Reeducação alimentar</li>
                        <li>Emagrecimento</li>
                        <li>Nutrição esportiva</li>
                        <li>Condições clínicas</li>
                    </ul>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=fisioterapia">
            <div class="card">
                <img src="../imagens/home_imgs/img5.png" alt="">
                <div class="texto">
                    <p>Fisioterapia</p>
                    <ul>
                        <li>Reabilitação ortopédica</li>
                        <li>Fisioterapia respiratória</li>
                        <li>Fisioterapia neurológica</li>
                        <li>Tratamento de dores</li>
                        <li>Fisioterapia pélvica</li>
                        <li>Pilates terapêutico</li>
                    </ul>
                </div>
            </div>
        </a>
        <a href="../front/agendamento.php?clinica=veterinaria">
            <div class="card">
                <img src="../imagens/home_imgs/img6.png" alt="">
                <div class="texto">
                    <p>Veterinária</p>
                    <ul>
                        <li>Consultas e vacinas</li>
                        <li>Exames laboratoriais</li>
                        <li>Cirurgias</li>
                        <li>Castração</li>
                        <li>Emergências</li>
                        <li>Nutrição para pets</li>
                    </ul>
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