const numberOfExercices = 14;
const show = function (exerciceNumber)  {
    let btnExercice = document.getElementById(`js-btn-exercice${exerciceNumber}`);
    let responseExercice = document.getElementById(`js-response-exercice${exerciceNumber}`);
    let iconCircled = document.getElementById(`icon-circled${exerciceNumber}`);

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

for (let i=1; i <= 14; ++i) {
    show(i);
}
