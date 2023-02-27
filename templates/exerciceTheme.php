<?php
    const BUTTON_RESPONSE_VALUE = "Voir la réponse";
    function exercice (int $exerciceNumber, array $code): void
    {
        echo "<div id='exercice$exerciceNumber'>";
        echo "<br>";
        echo "<p class=\"alert alert-info w-50\">Résultat :";
        echo "<br>";
        echo $code[0] ?? null;
        echo "<p>";
        echo "<button id=\"js-btn-exercice$exerciceNumber\" class=\"btn btn-success btn-sm mb-3\">";
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


