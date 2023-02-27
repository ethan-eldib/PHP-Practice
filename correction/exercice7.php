// La fonction
function primaryNumber (int $number): string
{
    $primaryNumber = [];

    for($i=2;$i<=$number;$i++){
        $isPrime = true;

        for($j=2;$j<$i;$j++){
            if($i%$j==0){
                $isPrime = false;
                break;
            }
        }

        if($isPrime){
            $primaryNumber[] = $i;
        }
    }

    return "Les nombres premiers entre 2 et ".$number." sont : " . implode(", ", $primaryNumber);
}


// Appel de votre fonction
primaryNumber(50)

