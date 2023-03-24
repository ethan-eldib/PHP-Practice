export const response19 = `
    class Voiture
    {
        private string $marque;
    
        private string $modele;
    
        private string $annee;
    
        private float $kilometrage;
    
        /**
         * @param string $marque
         * @param string $modele
         * @param string $annee
         * @param float $kilometrage
         */
        public function __construct(
                string $marque,
                string $modele,
                string $annee,
                float $kilometrage
        )
        {
            $this->marque       = $marque;
            $this->modele       = $modele;
            $this->annee        = $annee;
            $this->kilometrage  = $kilometrage;
        }
    
        /**
         * Retourne l'âge de la voiture en années.
         *
         * @return int
         * @throws Exception Si l'année de la voiture n'est pas valide.
         */
        public function getAgeDuVehicule(): int
        {
            $currentYear = (int) date('Y');
            if ($this->annee > $currentYear || $this->annee < ($currentYear - 100)) {
                throw new Exception('L\\'année de la voiture n\\'est pas valide');
            }
            return $currentYear - $this->annee;
        }
    
        /**
         * Augmente le kilométrage de la voiture.
         *
         * @param float $addKilometrage Le nombre de kilomètres à ajouter.
         */
        public function setKilometrage(float $addKilometrage): void
        {
            $this->kilometrage += $addKilometrage;
        }
    
    }
    
    $voiture = new Voiture('Fiat', '500', 1987, 43000);
    $voiture->setKilometrage(4500);
    $age = $voiture->getAgeDuVehicule();
    echo "Le véhicule a $age an(s)";
`;