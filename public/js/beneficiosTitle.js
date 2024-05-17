export default function beneCard() {
    const div = document.querySelectorAll('.container-cards-bene label');
    const title = document.querySelector('.tituloBene');

    div.forEach(card => {
        card.addEventListener('click', (event) => {
            const targetTitulo = event.target.children[0].childNodes[3].children[0].textContent;
            title.textContent = targetTitulo;
        })
    })
}