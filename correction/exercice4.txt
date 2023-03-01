// La fonction
function combineUniqueArrays (array $firstArray, array $secondArray): array
{
    echo "Vos tableaux combinés contiennent les valeurs suivantes : " . implode(" ; ", array_merge($firstArray, $secondArray));
    return array_unique(array_merge($firstArray, $secondArray));
}

// Appel de la fonction
implode(", ", combineUniqueArrays(['Jane', 'John', 'John'], [10, 10, 25]))

