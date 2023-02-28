// La fonction
function countCharactersForAllStrings(array $arrayOfStrings): string
{
    if (empty($arrayOfStrings)) {
        return "Votre tableau est vide";
    }
    $imp = implode("", $arrayOfStrings);
    $length = strlen($imp);

    return $length === 0
        ? "Votre tableau contient 0 caractère"
        : ($length === 1
            ? "Votre tableau contient 1 caractère"
            : "Votre tableau contient ". strlen($imp) ." caractères");
}

// Appel de la fonction
countCharactersForAllStrings([])
