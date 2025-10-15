<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/cadastro.css">
    <title>Cadastro Anhanguera</title>
</head>

<body>
    <!-- leyout -->
    <div class="leyout">
        <h1 class="logo"><a href="https://www.anhanguera.com" target="_blank"><img src="imagens/logo.png"></a>Saúde+<br>Anhanguera</h1>
        <section>
            <button id="b1">login</button>
            <button onclick="abrir()" id="b2">cadastro</button>
        </section>
    </div>
    <main>
        <!-- fundo -->
        <div class="fundo">
            <img src="imagens\cadastro_modelos\fundo.jpg" alt="">
            <div class="circulo">
                <div class="bem_vindo">
                    <h1>
                        <h1>Bem-vindo ao <span style="color: #0077b6;">Saúde+ Anhanguera</span>!</h1>
                        <p>
                            Cuidamos da sua saúde com qualidade, tecnologia e atendimento humanizado.<br>
                            Aqui, você encontra os serviços e clínicas da Anhanguera prontos para cuidar de você com excelência.
                        </p>
                    </h1>
                </div>
            </div>
        </div>
        <!-- titulo nossas clínicas -->
        <h1 id="nossas_clinicas"><b>nossas clínicas</b></h1>
        <!-- propaganda -->
        <div class="propaganda">
            <section class="img1">
                <div>
                    <h2>Clínica de Odontologia</h2>
                    <img style="position:relative" src="imagens/cadastro_modelos/img1.png" alt="">
                    <p>
                        A <strong>Clínica de Odontologia da Anhanguera</strong> oferece atendimento completo em saúde bucal com qualidade e cuidado.
                    </p>
                </div>
            </section>

            <section class="img2">
                <div>
                    <h2>Clínica de Estética</h2>
                    <img style="position:relative" src="imagens/cadastro_modelos/img2.png" alt="">
                    <p>
                        A <strong>Clínica de Estética da Anhanguera</strong> promove beleza, bem-estar e autoestima com técnicas modernas.
                    </p>
                </div>
            </section>

            <section class="img3">
                <div>
                    <h2>Clínica de Psicologia</h2>
                    <img style="position:relative" src="imagens/cadastro_modelos/img3.png" alt="">
                    <p>
                        A <strong>Clínica de Psicologia da Anhanguera</strong> oferece apoio emocional e escuta acolhedora para o bem-estar mental.
                    </p>
                </div>
            </section>

            <section class="img4">
                <div>
                    <h2>Clínica de Nutrição</h2>
                    <img style="position:relative" src="imagens/cadastro_modelos/img4.png" alt="">
                    <p>
                        A <strong>Clínica de Nutrição da Anhanguera</strong> orienta hábitos saudáveis e planos alimentares personalizados.
                    </p>
                </div>
            </section>

            <section class="img5">
                <div>
                    <h2>Clínica de Fisioterapia</h2>
                    <img style="position:relative" src="imagens/cadastro_modelos/img5.png" alt="">
                    <p>
                        A <strong>Clínica de Fisioterapia da Anhanguera</strong> oferece reabilitação e prevenção com foco na qualidade de vida.
                    </p>
                </div>
            </section>

            <section class="img6">
                <div>
                    <h2>Clínica Veterinária</h2>
                    <img style="position:relative" src="imagens/cadastro_modelos/img6.png" alt="">
                    <p>
                        A <strong>Clínica Veterinária da Anhanguera</strong> cuida da saúde e bem-estar dos animais com dedicação e carinho.
                    </p>
                </div>
            </section>


        </div>
        <!-- entre em contato -->
        <div class="contato">
            <img src="" alt="">
            <section>
                <h1>Entre em contato conosco!</h1>
                <h2>Telefone:## #########</h2>
                <h2>Email:qualquercoisa@gmail.com</h2>
                <h2>social: <img src=""><img src=""><img src=""></h2>
            </section>

        </div>
    </main>

    <div class="login">
        <section>
            <h1>cadastro</h1>
            <button onclick="fechar()" type="none">x</button>
        </section>
        
        <form action="back_php/verificação_cadastro.php" method="POST">
            <p>cpf:<br><input type="text" name="cpf" id=""></p>
            <p>senha:<br><input type="password" name="senha" id=""></p>
            <p>confirmar senha:<br><input type="password" name="confirmar_senha" id=""></p>
            <button type="submit">entrar</button>
        </form>
    </div>
    </div>

    <script src="back_js/cadastro.js"></script>
</body>

</html>