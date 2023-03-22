import './scrollEvent.js';
import {simulateTyping} from "./typingEvent.js";
import {response1} from "../../correction/easy/exercice1.js";
import {response2} from "../../correction/easy/exercice2.js";
import {response3} from "../../correction/easy/exercice3.js";
import {response4} from "../../correction/easy/exercice4.js";
import {response5} from "../../correction/easy/exercice5.js";
import {response6} from "../../correction/easy/exercice6.js";
import {response7} from "../../correction/easy/exercice7.js";
import {response8} from "../../correction/easy/exercice8.js";
import {response9} from "../../correction/easy/exercice9.js";
import {response10} from "../../correction/easy/exercice10.js";
import {response11} from "../../correction/easy/exercice11.js";
import {response12} from "../../correction/easy/exercice12.js";
import {response13} from "../../correction/easy/exercice13.js";
import {response14} from "../../correction/easy/exercice14.js";
import {response15} from "../../correction/easy/exercice15.js";
import {response16} from "../../correction/easy/exercice16.js";
import {response17} from "../../correction/medium/exercice17.js";
import {response18} from "../../correction/medium/exercice18.js";
import {response19} from "../../correction/medium/exercice19.js";
import {response20} from "../../correction/medium/exercice20.js";
import {response21} from "../../correction/medium/exercice21.js";
import {response22} from "../../correction/medium/exercice22.js";
import {response23} from "../../correction/medium/exercice23.js";
import {response24} from "../../correction/medium/exercice24.js";
import {response25} from "../../correction/medium/exercice25.js";
import {response26} from "../../correction/medium/exercice26.js";
import {response27} from "../../correction/medium/exercice27.js";
import {response28} from "../../correction/medium/exercice28.js";
import {response29} from "../../correction/medium/exercice29.js";
import {response30} from "../../correction/medium/exercice30.js";
import {response31} from "../../correction/medium/exercice31.js";
import {response32} from "../../correction/medium/exercice32.js";

const NUMBER_OF_EXERCICES = 32;

const responses = {
    1: response1,
    2: response2,
    3: response3,
    4: response4,
    5: response5,
    6: response6,
    7: response7,
    8: response8,
    9: response9,
    10: response10,
    11: response11,
    12: response12,
    13: response13,
    14: response14,
    15: response15,
    16: response16,
    17: response17,
    18: response18,
    19: response19,
    20: response20,
    21: response21,
    22: response22,
    23: response23,
    24: response24,
    25: response25,
    26: response26,
    27: response27,
    28: response28,
    29: response29,
    30: response30,
    31: response31,
    32: response32
};

/**
 * Gère l'affichage et le masquage des réponses pour un exercice spécifique.
 * Lorsqu'on clique sur le bouton "Voir la réponse", la réponse est affichée avec une animation de saisie simulée.
 * En cliquant à nouveau sur le bouton, la réponse est masquée et le bouton revient à son état initial.
 *
 * @param {number} exerciceNumber - Le numéro de l'exercice pour lequel gérer l'affichage de la réponse
 */
const show = function (exerciceNumber) {
    const btnExercice = document.getElementById(`js-btn-exercice${exerciceNumber}`);
    const responseExercice = document.getElementById(`js-response-exercice${exerciceNumber}`);
    const btnCopyToClipboard = document.getElementById(`copyToClipboard${exerciceNumber}`);
    let confirmed = false;

    if (btnExercice !== null) {
        btnExercice.addEventListener('click', () => {

            if (!confirmed) {
                if (responseExercice.innerHTML === "") {
                    confirmed = confirm("Es-tu sûr(e) de vouloir afficher la réponse ?");
                } else {
                    responseExercice.innerHTML = "";
                }
            }

            if (confirmed) {
                if (responseExercice.innerHTML === "") {
                    // Si responses à une propriété = au numéro de l'exercice, retourne TRUE
                    if (responses.hasOwnProperty(exerciceNumber)) {
                        simulateTyping(responseExercice, responses[exerciceNumber]);
                    } else {
                        console.error(`Aucune réponse pour l'exercice ${exerciceNumber}`);
                    }
                    btnExercice.value = "Masquer la réponse";
                    btnExercice.classList.add('btn-dark');
                    btnCopyToClipboard.style.display = "block";
                } else {
                    responseExercice.innerHTML = "";
                    btnExercice.value = "Voir la réponse ?";
                    btnExercice.classList.remove('btn-dark');
                    btnCopyToClipboard.style.display = "none";
                }
            }
        });
    }
};

for (let i = 1; i <= NUMBER_OF_EXERCICES; ++i) {
    show(i);
}