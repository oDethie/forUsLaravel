export default function typeWriter(element) {
    const textoArray = element.textContent.split('');

    element.textContent = '';

    textoArray.forEach((letra, i) => {
        setTimeout(() => {
            element.textContent += letra;
        }, i * 75)
    })
}
