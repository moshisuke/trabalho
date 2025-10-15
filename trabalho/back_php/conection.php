<?php
$local = "localhost";
$usuario = "root";       
$senha = "";             
$banco = "agenda_anhanguera";

// Cria a conexão
$conexao = mysqli_connect($local, $usuario, $senha, $banco);

// Verifica se deu certo
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}else {
    echo "Conexão realizada com sucesso!";
}
?>


let index = 0;

function mostrarSlide() {
    const slides = document.querySelector('.slides');
    slides.style.transform = `translateX(${(-index * 100)/3}%)`;
}

function avancar() {
    const total = document.querySelectorAll('.slides img').length;
    index = (index + 1) % total;
    mostrarSlide();
}

function voltar() {
    const total = document.querySelectorAll('.slides img').length;
    index = (index - 1 + total) % total;
    mostrarSli