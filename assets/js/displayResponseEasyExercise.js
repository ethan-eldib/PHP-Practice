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

const NUMBER_OF_EXERCICES = 16;

/**
 * Affiche ou masque la réponse à un exercice lorsqu'on clique sur le bouton "Voir la réponse".
 *
 * @param {number} exerciceNumber - Le numéro de l'exercice
 */
const show = function (exerciceNumber) {
    const btnExercice = document.getElementById(`js-btn-exercice${exerciceNumber}`);
    const responseExercice = document.getElementById(`js-response-exercice${exerciceNumber}`);
    const btnCopyToClipboard = document.getElementById(`copyToClipboard${exerciceNumber}`);
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
                    case 'js-response-exercice1':
                        simulateTyping(responseExercice, response1);
                        break;
                    case 'js-response-exercice2':
                        simulateTyping(responseExercice, response2);
                        break;
                    case 'js-response-exercice3':
                        simulateTyping(responseExercice, response3);
                        break;
                    case 'js-response-exercice4':
                        simulateTyping(responseExercice, response4);
                        break;
                    case 'js-response-exercice5':
                        simulateTyping(responseExercice, response5);
                        break;
                    case 'js-response-exercice6':
                        simulateTyping(responseExercice, response6);
                        break;
                    case 'js-response-exercice7':
                        simulateTyping(responseExercice, response7);
                        break;
                    case 'js-response-exercice8':
                        simulateTyping(responseExercice, response8);
                        break;
                    case 'js-response-exercice9':
                        simulateTyping(responseExercice, response9);
                        break;
                    case 'js-response-exercice10':
                        simulateTyping(responseExercice, response10);
                        break;
                    case 'js-response-exercice11':
                        simulateTyping(responseExercice, response11);
                        break;
                    case 'js-response-exercice12':
                        simulateTyping(responseExercice, response12);
                        break;
                    case 'js-response-exercice13':
                        simulateTyping(responseExercice, response13);
                        break;
                    case 'js-response-exercice14':
                        simulateTyping(responseExercice, response14);
                        break;
                    case 'js-response-exercice15':
                        simulateTyping(responseExercice, response15);
                        break;
                    case 'js-response-exercice16':
                        simulateTyping(responseExercice, response16);
                        break;
                    default:
                        console.error('Aucune réponse pour cet exercice')
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
    })
}

for (let i = 1; i <= NUMBER_OF_EXERCICES; ++i) {
    show(i);
}