const NUMBER_OF_EXERCICES = 14;
const show = function (exerciceNumber)  {
    const btnExercice = document.getElementById(`js-btn-exercice${exerciceNumber}`);
    const responseExercice = document.getElementById(`js-response-exercice${exerciceNumber}`);
    const iconCircled = document.getElementById(`icon-circled${exerciceNumber}`);

    btnExercice.addEventListener('click', () => {
        if (responseExercice.style.display === "none") {
            if (confirm("Je me demande si tu as fait une petite balade en solitaire sur la toile à la recherche de ta réponse, ou si tu préfères que je sois ton guide personnel dans cet océan de connaissances ?")) {
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
