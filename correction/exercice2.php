
// La fonction
function strReverse (string $word): string
{
    return "Vous avez saisi le mot '$word', le résultat avec les caractères inversés est '". strrev($word) ."'";
}
?>

// l'affichage
strReverse('Bonjour')
