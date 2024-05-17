import typeWriter from './typeWriter.js';
import rotation from './rotatingText.js';
import beneCard from './beneficiosTitle.js';

const tituloInicial = document.querySelector('[data-maquina]');
typeWriter(tituloInicial);

rotation();

function trocaElemento() {
    const tituloInicial = document.querySelector('[data-maquina]');

    console.log(tituloInicial);

    const element = `Conectando <span class="sublinhado">talentos</span> e <span class="sublinhado">oportunidades</span> em uma única e exclusiva plataforma.`;

    tituloInicial.innerHTML = element;
}

setTimeout(trocaElemento, 6000);

beneCard();

