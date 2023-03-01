class Car
{
    public string $constructor;
    public string $model;
    public string $color;

    /**
     * @param string $constructor
     * @param string $model
     * @param string $color
     */
    public function __construct(string $constructor, string $model, string $color)
    {
        $this->constructor = $constructor;
        $this->model = $model;
        $this->color = $color;
    }
}

$car1 = new Car('Peugeot', '206', 'Rouge');
$car2 = new Car('Fiat', '500', 'Noir');
$car3 = new Car('Seat', 'Ibiza', 'Blanc');
$car4 = new Car('Renault', 'Clio', 'Rouge');
$car5 = new Car('Nissan', 'Micra', 'Blanc');

$cars = [$car1, $car2, $car3, $car4, $car5];

// La fonction
function getCarsByColor (array $arrayObjects, string $color): string
{

    $results = array_reduce($arrayObjects, function ($acc, $object) use ($color) {
        if (strcasecmp($object->color, $color) === 0) {
            $acc[] = $object;
        }
        return $acc;
    }, []);

    if (count($results) > 0) {
        $table = "<\table class='table'>";
        $table .= "<\tr><\th>Constructeur<\/th><\th>Modèle<\/th><\th>Couleur<\/th><\/tr>";
        foreach ($results as $result) {
            $table .= sprintf("<\tr><\td>%s<\/td><\td>%s<\/td><\td>%s<\/td><\/tr>", $result->constructor, $result->model, $result->color);
        }
        $table .= "<\/table>";

        return $table;
    } else {
        return "Aucun résultat";
    }
}

// Appel de la fonction
getCarsByColor($cars, 'noir')