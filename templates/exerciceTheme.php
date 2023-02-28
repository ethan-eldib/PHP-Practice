<?php
    const BUTTON_RESPONSE_VALUE = "Voir la réponse";
    function exercice (int $exerciceNumber, string $statement, array $code): void
    {
        echo "<div class='mx-auto w-50' id='exercice$exerciceNumber'>";
        echo "<h5 class=\"alert alert-secondary alert alert-secondary\">E$exerciceNumber. $statement</h5>";
        echo "<br>";
        echo "<p class=\"alert alert-secondary\">Résultat :";
        echo "<br>";
        echo $code[0] ?? null;
        echo "<p>";
        echo "<button id=\"js-btn-exercice$exerciceNumber\" class=\"btn btn-sm mb-3\">";
        echo "<img id=\"icon-circled$exerciceNumber\" width=\"15\" style=\"margin-right:12px\" src=\"https://img.icons8.com/material-outlined/512/circled-chevron-down.png\" />";
        echo BUTTON_RESPONSE_VALUE;
        echo "</button>";
        echo "<div id=\"js-response-exercice$exerciceNumber\" style=\"display: none\">";
        echo "<pre>";
        include "correction/exercice$exerciceNumber.php";
        echo "</pre>";
        echo "</div>";
        echo "</div>";
    }


