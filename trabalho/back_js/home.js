let index = 0;

function mostrarSlide() {
  const slides = document.querySelector('.slides');
  slides.style.transform = `translateX(-${index * 100}%)`;
}

function avancar() {
  const total = document.querySelectorAll('.slides img').length;
  index = (index + 1) % total;
  mostrarSlide();
}

function voltar() {
  const total = document.querySelectorAll('.slides img').length;
  index = (index - 1 + total) % total;
  mostrarSlide();
}
