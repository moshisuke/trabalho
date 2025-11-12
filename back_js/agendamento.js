/* function preencherTexto(radio) {
    document.querySelector(".agendamento_rapido .serviço").value = radio.value; // isso ainda muda o texto!
}
 */

let meses = [
    "janeiro",
    "fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
    "julho",
    "agosto",
    "setembro",
    "outubro",
    "novembro",
    "dezembro"
];

let mes_calendario = document.getElementById("mes_calendario");
let contador = 0;
let mesAtual = new Date().getMonth();
let anoAtual = new Date().getFullYear();
mes_calendario.innerHTML = meses[mesAtual + contador] + " " + anoAtual;

function avancar_mes() {
    contador++;
    if (mesAtual + contador > 11) {
        contador = 0;
    }
    mes_calendario.innerHTML = meses[mesAtual + contador] + " " + anoAtual;
}
function voltar_mes() {
    contador--;
    if (contador < 0) {
        contador = meses.length - mesAtual-1;
    }
    mes_calendario.innerHTML = meses[mesAtual + contador] + " " + anoAtual;
}

