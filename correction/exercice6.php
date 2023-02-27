// Première proposition
function getStringsHaveLongerThan5Char (array $words): string
{
    $longWords = [];
    foreach ($words as $word) {
        if (strlen($word) > 5) {
            $longWords[] = $word;
        }
    }

    $count = count($longWords);
    $result = "Liste des mots ayant plus de 5 caractères : ";
    if ($count > 0) {
        $result .= implode(' ; ', $longWords);
    } else {
        $result .= "Aucun mot n'a plus de 5 caractères.";
    }

    return $result;
}

// Seconde proposition
function getStringsHaveLongerThan5Char (array $words): string
{
    $result = "";
    foreach ($words as $key => $word) {
        if (strlen($word) > 5) {
            $result .= $key === 0 ? ' '.$word : ' ; '.$word;
        }
    }

    return "Liste des mots ayant plus de 5 caractères : ".$result;
}

// Appel de la fonction
getStringsHaveLongerThan5Char(['Palindrome', 'Clavier', 'Souris', 'God Of War', 'radar'])