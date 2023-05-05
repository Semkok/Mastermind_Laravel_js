let currentRow = 1;
let currentColumn = 1;
let countTrue = 0;
let globalRandomColors = [];
let clickableColors = document.querySelectorAll('.colorButton');
for (let i = 0; i < 4; i++) {
    let numberColor = Math.floor(Math.random() * 8);
    globalRandomColors.push(clickableColors[numberColor].id);
}
console.log(globalRandomColors);

// klik op een kleur --> zet de kleur op de juiste plek
clickableColors.forEach((colorButton) => {
    colorButton.addEventListener('click', (event) => {
        if (currentColumn > 4) {
            return;
        }
        const selectedColor = event.target.id;
        document.getElementById(`column-${currentRow}-${currentColumn}`).style.backgroundColor = selectedColor;
        currentColumn++;
    });
});

// controleren!
document.querySelector('.checkbutton').addEventListener('click', (event) => {
    if (currentColumn >= 5) {
        let randomColorsTemp = [...globalRandomColors]; // kloon globalRandomColors en maak daar een nieuwe variabel randomColorsTemp van
        let hints = document.querySelectorAll(`#row-${currentRow} .checkers`);
        console.log(randomColorsTemp);

        // 1. welke kleuren heb ik geselecteerd (array)
        let selectedColors = [];
        document.querySelectorAll(`#row-${currentRow} .place`).forEach((column) => {
            selectedColors.push(column.style.backgroundColor);
        });

        // 2. check of kleuren op de juiste plek zitten
        let correctAnswer = 0;
        for (let index = 0; index < 4; index++) {
            if (randomColorsTemp[index] === selectedColors[index]) {
                hints[correctAnswer].style.backgroundColor = 'red';
                correctAnswer++;
                randomColorsTemp[index] = '';
                selectedColors[index] = '';
            }
        }
        for (let index = 0; index < 4; index++) {
            if (hints[index].style.backgroundColor === "red"){
                countTrue++;
            }
            if (countTrue === 4){
                alert("you win!");
            }
        }

        console.log(randomColorsTemp, selectedColors);

        // 3. check of kleuren erin zitten maar op verkeerde plek
        let almostAnswer = 0;
        for (let index = 0; index < 4; index++) {
            if (selectedColors[index] !== '' && randomColorsTemp.includes(selectedColors[index])) {
                hints[correctAnswer+almostAnswer].style.backgroundColor = 'white';
                almostAnswer++;
                randomColorsTemp[randomColorsTemp.indexOf(selectedColors[index])] = '';
            }
        }

        // reset en naar de volgende rij
        currentRow++;
        currentColumn = 1;
        countTrue = 0;

        if(currentRow >= 11){
            alert("you lose")
        }


    }
});
