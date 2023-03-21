<?php
const INVALID_ARGUMENT_MESSAGE = "Merci de bien vouloir saisir un chiffre valide pour l'exercice";
const EXERCISE_NOT_EMPTY_MESSAGE = "La consigne de l'exercice ne doit pas être vide ou null.";

/**
 * Affiche le code de l'exercice avec un bouton pour afficher la réponse.
 *
 * @param int $exerciceNumber Le numéro de l'exercice.
 * @param string $statement La consigne de l'exercice.
 * @param string $code Le code de l'exercice à afficher sur la page web.
 * @throws InvalidArgumentException Si $exerciceNumber n'est pas un chiffre valide.
 */
function exercice(int $exerciceNumber, string $statement, string $code): void
{
    if (!is_numeric($exerciceNumber)) {
        throw new InvalidArgumentException(INVALID_ARGUMENT_MESSAGE);
    }

    if (empty(trim($statement))) {
        throw new InvalidArgumentException(EXERCISE_NOT_EMPTY_MESSAGE);
    }

    $html = '<div class="mx-auto w-50" id="exercice' . $exerciceNumber . '">
                <h5 class="alert alert-secondary alert alert-secondary">E' . $exerciceNumber . '. ' . $statement . '</h5>
                <br>
                <input type="button" id="js-btn-exercice' . $exerciceNumber . '" class="btn btn-sm mb-3 btn-success" value="Voir la réponse ?" />
                <div class="responseContent">
                    <pre class="bg-dark bg-gradient text-white rounded" id="js-response-exercice' . $exerciceNumber . '"></pre>
                    <button class="copyToClipboard" id="copyToClipboard' . $exerciceNumber . '" onclick="copyToClipboard('.$exerciceNumber.')">Copier</button>
                </div>
                <p class="alert alert-secondary">Résultat :
                    <br>
                    ' . $code . '
                </p>
            </div>';

    echo $html;
}


