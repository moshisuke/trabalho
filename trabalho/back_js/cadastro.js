let tela_cadastro = document.querySelector('.cadastro');
let fundo = document.querySelector('body');

function abrir_cadastro() {
    tela_cadastro.style.display = 'flex';
    fundo.style.overflowY = 'hidden';
}
function fechar_cadastro() {
    tela_cadastro.style.display = 'none';
    fundo.style.overflowY = 'auto';
}

let tela_login = document.querySelector('.login');

function abrir_login() {
    tela_login.style.display = 'flex';
    fundo.style.overflowY = 'hidden';
}
function fechar_login() {
    tela_login.style.display = 'none';
    fundo.style.overflowY = 'auto';
}
