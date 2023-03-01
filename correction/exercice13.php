// La fonction
function replaceLetters (string $search, string $replace, string $sentence): string
{
    if (empty($search) || empty($replace) || empty($sentence)) {
        throw new InvalidArgumentException("Les arguments ne doivent pas être vides.");
    }

    $result = str_ireplace($search, $replace, $sentence);

    if (!$result) {
        throw new RuntimeException("Une erreur s'est produite, veuillez réessayer.");
    }

    return $result;
}

// Appel de la fonction
replaceLetters('a', 'e', "La Saxe est une belle région")
