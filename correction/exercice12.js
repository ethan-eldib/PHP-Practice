export const response12 = `
    class Animal {
        public string $breed;
        public int $price;
        public string $name;
        public function __construct($breed, $price, $name)
        {
            $this->breed = $breed;
            $this->price = $price;
            $this->name = $name;
        }
    }
    
    $animals = [
        new Animal("Berger Allemand", 1500, "Rintintin"),
        new Animal("Saint-Bernard", 2300,"Beethoven"),
        new Animal("Akita", 1980,"Hachikō")
    ];
    
    // La fonction
    /**
     * @param array $sortingArray
     * @param string $property
     * @return string
     */
    function sortArrayObjectByASC (array $sortingArray, string $property): string
    {
    
        if (empty($sortingArray)) {
            throw new InvalidArgumentException("Le tableau ne peut pas être vide");
        }
    
        if (!property_exists(current($sortingArray), $property)) {
            throw new InvalidArgumentException("La propriété spécifiée en second argument de la fonction sortArrayObjectByProperty() n'existe pas dans le tableau");
        }
    
        usort($sortingArray, function ($a, $b) use ($property) {
            return  strnatcmp($a->$property, $b->$property);
        });
    
        $table = "<table class='table'>
                    <tr>
                        <th>Name</th>
                        <th>Breed</th>
                        <th>Price</th>
                    </tr>";
        foreach ($sortingArray as $sorting) {
            $table .= "<tr>
                            <td> $sorting->name </td>
                            <td> $sorting->breed </td>
                            <td> $sorting->price </td>
                        </tr>";
        }
        $table .= "</table>";
    
        return $table. " Trie du tableau par ordre croissant sur la propriété " . $property ;
    }
    
    // Appel de la fonction
    sortArrayObjectByASC($animals, 'breed')`;