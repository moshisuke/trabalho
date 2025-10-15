<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <title>Saúde+ Anhanguera</title>
</head>

<body>

    <!-- LAYOUT -->
    <header class="leyout">
        <h1 class="logo">
            <a href="https://www.anhanguera.com" target="_blank">
                <img src="imagens/logo.png" alt="Logo">
            </a>
            Saúde+<br>Anhanguera
        </h1>

        <div class="leyout_pt1">
            <a href="#">Página Inicial</a>
            <a href="#">Minhas Consultas</a>
            <a href="#">Fale Conosco</a>
        </div>

        <div class="leyout_pt2">
            <button><img src="imagens/home_imgs/perfil.png" alt="Perfil"></button>
        </div>
    </header>

    <!-- CARROSSEL -->
    <div class="carrossel_container">
        <div class="carrossel">
            <div class="slides">
                <img src="imagens/cadastro_modelos/img1.png" alt="">
                <img src="imagens/cadastro_modelos/img2.png" alt="">
                <img src="imagens/cadastro_modelos/img3.png" alt="">
            </div>
        </div>

        <div class="botoes">
            <button class="btn" onclick="voltar()">&#10094;</button>
            <button class="btn" onclick="avancar()">&#10095;</button>
        </div>
    </div>


    <!-- PRINCIPAIS SERVIÇOS -->
    <main>
        <a href="#">
            <section></section>
        </a>
        <a href="#">
            <section></section>
        </a>
        <a href="#">
            <section></section>
        </a>
        <a href="#">
            <section></section>
        </a>
    </main>

    

    <script src="back_js/home.js"></script>

</body>

</html>