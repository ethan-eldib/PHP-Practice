
// La fonction
function displayDateTime(): DateTime
{
    return new DateTime();
}

// L'affichage
"Nous sommes le ". displayDateTime()->format('d/m/Y') . " et il est " . displayDateTime()->format('H\hi')