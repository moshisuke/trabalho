let index = 0;

const slides = document.querySelector('.slides');
const total = document.querySelectorAll('.slides img').length;

function mostrarSlide() {
    slides.style.transform = `translateX(${(-index * 100) / total}%)`;
}

function avancar() {
    index = (index + 1) % total;
    mostrarSlide();
}

function voltar() {
    const total = document.querySelectorAll('.slides img').length;
    index = (index - 1 + total) % total;
    mostrarSlide();
}