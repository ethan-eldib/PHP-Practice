export const response11 = `
    // Première proposition
    function getSumOddNumbersFrom1n (int $number): string
    {
        $oddNumbers = [];
        for ($i=$number; $i >= 1; $i--) {
            if ($i%2 === 1) {
                $oddNumbers[] = $i;
            }
        }
        return "Calcul de la somme des nombres impairs compris dans le nombre " . $number . " : "
            . implode(" + ", $oddNumbers) . " = " . array_sum($oddNumbers);
    }
    
    // Seconde proposition
    function getSumOddNumbersFrom1n(int $number): string
    {
        $oddNumbers = range(1, $number, 2);
        $sumOfOddNumbers = array_sum($oddNumbers);
    
        return "Calcul de la somme des nombres impairs compris dans le nombre " . $number . " : "
            . implode(" + ", $oddNumbers) . " = " . $sumOfOddNumbers;
    }
    
    // Appel de la fonction
    getSumOddNumbersFrom1n(11)`;