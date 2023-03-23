export const response18 = `
    class CompteBancaire
    {
        private Personne $titulaire;

        private float $solde;

        private string $devise;

        public function __construct(Personne $titulaire, float $solde, string $devise)
        {
            $this->titulaire = $titulaire;
            $this->solde = $solde;
            $this->devise = $devise;
        }

        /**
         * @return string
         */
        public function getDevise(): string
        {
            return $this->devise;
        }

        public function setDepot(float $montant): float
        {
            echo "Votre dépôt de ". $montant . $this->getDevise() . " a été efectué avec succés." . "<\br>";
            return $this->solde += $montant;
        }

        public function setRetrait(float $montant): float
        {
            if ($montant <= $this->solde) {
                $this->solde -= $montant;
            } else {
                echo "Votre retrait de ". $montant . $this->getDevise() . " est impossible, le solde est insuffisant." . "<\br>";
            }
            return $this->solde;
        }

        public function afficherInfo(): void
        {
            echo "Titulaire du compte : " . $this->titulaire->getNom() . " " . $this->titulaire->getPrenom() . "<\br>";
            echo "Votre solde : " . $this->solde . " " . $this->devise;
        }
    }

    // Voir exercice 17
    $client = new Personne("Dupont", "Marc", "75");

    $compteBancaire1 = new CompteBancaire($client, 123.4, "€");

    //$compteBancaire1->setRetrait(500);
    //$compteBancaire1->setDepot(456.9);

    $compteBancaire1->afficherInfo();
`;