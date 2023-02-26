// La fonction
function displayDateTime(): string
{
    return "Nous sommes le ". (new DateTime())->format('d/m/Y') . " et il est " . (new DateTime())->format('H\hi');
}

// L'affichage
displayDateTime()