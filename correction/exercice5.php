
// La fonction
function averageArray (array $ratings): string
{
    $sum = array_sum($ratings);
    $average = $sum / count($ratings);
    $hasError = false;
    foreach ($ratings as $key => $rating)  {
        if ($rating > 20) {
            $hasError = true;
            echo "La note à la position " . ($key + 1) . " de votre tableau est supérieure à 20.";
        }
    }
    if ($hasError) {
        return "Veuillez saisir des notes inférieures ou égales à 20.";
    }
    return "La moyenne est de ". $average . "/20 " ;
}

// l'affichage
averageArray([10, 20, 5, 12])
