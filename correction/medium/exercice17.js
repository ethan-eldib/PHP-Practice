export const response17 = `
    class Personne
    {
        private string $nom;
        private string $prenom;
        private string $age;

        public function __construct(string $nom, string $prenom, string $age)
        {
            $this->nom      = $nom;
            $this->prenom   = $prenom;
            $this->age      = $age;
        }

        /**
         * @return string
         */
        public function getPrenom(): string
        {
            return $this->prenom;
        }

        /**
         * @param string $prenom
         */
        public function setPrenom(string $prenom): void
        {
            $this->prenom = $prenom;
        }

        /**
         * @return string
         */
        public function getAge(): string
        {
            return $this->age;
        }

        /**
         * @param string $age
         */
        public function setAge(string $age): void
        {
            $this->age = $age;
        }

        public function getNom(): string
        {
            return $this->nom;
        }

        public function setNom($nom): void
        {
            $this->nom = $nom;
        }
    }

    $personne1 = new Personne("Dupont", "Marc", "75");
    
    echo "Yo ! Moi c'est " . $personne1->getPrenom() . " " . $personne1->getNom() . " et j'ai " . $personne1->getAge() . " ans";
`;