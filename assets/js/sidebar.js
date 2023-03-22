document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("runBtn").addEventListener("click", function () {
        let phpCode = document.getElementById("phpCode").value;
        fetch("../execute.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: "code=" + encodeURIComponent(phpCode)
        })
            .then(function (response) {
                if (response.ok) {
                    return response.text();
                } else {
                    throw new Error("Erreur lors de l'exécution du code PHP.");
                }
            })
            .then(function (data) {
                document.getElementById("result").innerHTML = data;
            })
            .catch(function (error) {
                document.getElementById("result").innerHTML = error.message;
            });
    });
});

/**
 * Fonction pour copier le texte d'un élément spécifique dans le presse-papiers.
 *
 * @param {number} exerciceNumber - Numéro de l'exercice dont le texte doit être copié.
 * @returns {void}
 */
function copyToClipboard(exerciceNumber) {
    const textElement = document.getElementById('js-response-exercice' + exerciceNumber);
    const range = document.createRange();
    range.selectNode(textElement);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();

    const btnCopyToClipboard = document.getElementById(`copyToClipboard${exerciceNumber}`);
    btnCopyToClipboard.innerText = "Copié !";
    btnCopyToClipboard.style.color = "mediumspringgreen";
    btnCopyToClipboard.style.backgroundColor = "darkslategrey";
}

const btnSidebarElt = document.getElementById("sidebar");
const divSidebarElt = document.getElementById("sidebarToggle");

btnSidebarElt.addEventListener("click", function () {
    divSidebarElt.classList.toggle('sidebarToggle');
})