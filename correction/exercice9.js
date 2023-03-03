export const response9 = `
    // La fonction
    function isIntegralNumberValid(string $number): bool
    {
        return is_numeric($number);
    }
    
    // Appel de la fonction
    isIntegralNumberValid('12,5') ? "La chaîne de caractère saisi est bien un nombre entier valide" : "La chaîne de caractère saisi n'est pas un nombre entier valide"`;