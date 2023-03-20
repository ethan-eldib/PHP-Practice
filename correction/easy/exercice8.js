export const response8 = `
    // Première proposition
    function getEvenNumbers (array $numbers): array
    {
        $evenNumbers = [];
        foreach ($numbers as $number) {
            if ($number%2 === 0) {
                $evenNumbers[] = $number;
            }
        }
    
        return $evenNumbers;
    }
    
    // Seconde proposition avec array_filter()
    function getEvenNumbers (array $numbers): array
    {
        return array_filter($numbers, function ($number) {
            return $number % 2 === 0;
        });
    }
    
    // Appel de la fonction
    "Liste des nombres pairs saisis dans le tableau : ". implode(", ", getEvenNumbers([12,10,8,1,7,9]))`;