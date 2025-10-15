let tela = document.querySelector('.login');
let fundo = document.querySelector('body');

function abrir() {
    tela.style.display = 'flex';
    fundo.style.overflowY = 'hidden';
}
function fechar() {
    tela.style.display = 'none';
    fundo.style.overflowY = 'auto';
}

