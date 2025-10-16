<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <title>Document</title>
</head>

<body>
    <nav class="leyout">
        <div class="leyout_1">
            <img src="imagens/logo.png" alt="">
            <a href="#">página inicial</a>
            <a href="#">minhas consultas</a>
            <a href="#">fale conosco</a>
        </div>
        <div class="leyout_2">

        </div>

    </nav>
    <main>
        <div class="clinicas">
            <section>clinica 1</section>
            <section>clinica 2</section>
            <section>clinica 3</section>
            <section>clinica 4</section>
            <section>clinica 5</section>
            <section>clinica 6</section>
        </div>


        <form action="agendamento.php" method="POST" class="agendamento_rapido">
            <h1 class="titulo">agendamento rápido</h1>
            <h2>clinica<br><input type="text" name="clinica" required></h2>
            <h2>serviço<br><input type="text" name="serviço" required></h2>
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

                    <input type="radio" name="horario" id="h11" hidden>
                    <label for="h11">11:00h</label>

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

</body>

</html>