const NUMBER_OF_EXERCICES = 15;
const show = function (exerciceNumber)  {
    const btnExercice = document.getElementById(`js-btn-exercice${exerciceNumber}`);
    const responseExercice = document.getElementById(`js-response-exercice${exerciceNumber}`);
    const iconCircled = document.getElementById(`icon-circled${exerciceNumber}`);

    btnExercice.addEventListener('click', () => {
        if (responseExercice.style.display === "none") {
            if (confirm("Tu confirmes que tu veux voir la réponse ?")) {
                responseExercice.style.display = "block";
                iconCircled.src = "https://img.icons8.com/material-outlined/512/circled-chevron-up.png";
            }
        } else {
            responseExercice.style.display = "none";
            iconCircled.src = "https://img.icons8.com/material-outlined/512/circled-chevron-down.png";
        }
    })
}

for (let i=1; i <= NUMBER_OF_EXERCICES; ++i) {
    show(i);
}

const btnBackToTop = document.getElementById('backToTop');

window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.documentElement.scrollTop > 300) {
        btnBackToTop.style.opacity = "1";
    } else {
        btnBackToTop.style.opacity = "0";
    }
}
