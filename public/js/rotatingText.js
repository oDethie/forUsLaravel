export default function rotation() {
    let words = document.querySelectorAll(".word");

    words.forEach((word) => {
        let letters = word.textContent.split("");
        word.textContent = "";
        // console.log(letters);
        letters.forEach((letter) => {
            let span = document.createElement("span");
            span.textContent = letter;
            span.className = "letter";
            word.append(span);
        });
    });

    let currentWordIndex = 0;
    let maxWorldIndex = words.length - 1;
    words[currentWordIndex].style.opacity = "1";

    let rotateText = () => {
        let currentWord = words[currentWordIndex];
        let nextWord = currentWordIndex === maxWorldIndex ? words[0] : words[currentWordIndex + 1];
        // OUT
        Array.from(currentWord.children).forEach((letter, i) => {
            setTimeout(() => {
                letter.className = "letter out";
            }, i * 80);
        });

        nextWord.style.opacity = "1";
        Array.from(nextWord.children).forEach((letter, i) => {
            letter.className = "letter behind";
            setTimeout(() => {
                letter.className = "letter in";
            }, 340 + i * 80);
        });
        currentWordIndex = 
        currentWordIndex === maxWorldIndex ? 0 : currentWordIndex + 1;
    }


    rotateText();
    setInterval(rotateText, 4000);

}