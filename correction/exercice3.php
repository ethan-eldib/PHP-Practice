
// La fonction
function isPalindrome ($word): string
{
    if ($word === strrev($word)) {
        return "C'est bien un Palindrome, le mot saisi est " . strtoupper($word) . " et une fois inversé cela donne " . strtoupper(strrev($word));
    } else {
        return "Ce n'est pas un Palindrome, le mot saisi est " . strtoupper($word) . " et une fois inversé cela donne " . strtoupper(strrev($word));
    }
}

// L'affichage
isPalindrome("radar")
