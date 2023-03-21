import './scrollEvent.js';
import {simulateTyping} from "./typingEvent.js";
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

/**
 * Affiche ou masque la réponse à un exercice lorsqu'on clique sur le bouton "Voir la réponse".
 *
 * @param {number} exerciceNumber - Le numéro de l'exercice
 */
const show = function (exerciceNumber) {
    const btnExercice = document.getElementById(`js-btn-exercice${exerciceNumber}`);
    const responseExercice = document.getElementById(`js-response-exercice${exerciceNumber}`);
    let confirmed = false;

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
                switch (responseExercice.id) {
                    case 'js-response-exercice17':
                        simulateTyping(responseExercice, response17);
                        break;
                    case 'js-response-exercice18':
                        simulateTyping(responseExercice, response18);
                        break;
                    case 'js-response-exercice19':
                        simulateTyping(responseExercice, response19);
                        break;
                    case 'js-response-exercice20':
                        simulateTyping(responseExercice, response20);
                        break;
                    case 'js-response-exercice21':
                        simulateTyping(responseExercice, response21);
                        break;
                    case 'js-response-exercice22':
                        simulateTyping(responseExercice, response22);
                        break;
                    case 'js-response-exercice23':
                        simulateTyping(responseExercice, response23);
                        break;
                    case 'js-response-exercice24':
                        simulateTyping(responseExercice, response24);
                        break;
                    case 'js-response-exercice25':
                        simulateTyping(responseExercice, response25);
                        break;
                    case 'js-response-exercice26':
                        simulateTyping(responseExercice, response26);
                        break;
                    case 'js-response-exercice27':
                        simulateTyping(responseExercice, response27);
                        break;
                    case 'js-response-exercice28':
                        simulateTyping(responseExercice, response28);
                        break;
                    case 'js-response-exercice29':
                        simulateTyping(responseExercice, response29);
                        break;
                    case 'js-response-exercice30':
                        simulateTyping(responseExercice, response30);
                        break;
                    case 'js-response-exercice31':
                        simulateTyping(responseExercice, response31);
                        break;
                    case 'js-response-exercice32':
                        simulateTyping(responseExercice, response32);
                        break;
                    default:
                        console.error('Aucune réponse pour cet exercice')
                }
                btnExercice.value = "Masquer la réponse";
                btnExercice.classList.add('btn-dark');
            } else {
                responseExercice.innerHTML = "";
                btnExercice.value = "Voir la réponse ?";
                btnExercice.classList.remove('btn-dark');
            }
        }
    })
}

for (let i = 17; i <= NUMBER_OF_EXERCICES; ++i) {
    show(i);
}