<?php
class Personne {

    // ----- Attributs publics -----
    public string $nom;
    public string $prenom;

    // ----- Attributs privés -----
    private string $dateNaissance;   // format "AAAA-MM-JJ"
    private string $villeNaissance;
    protected string $cin;

    // ----- Constructeur -----
    public function __construct(
        string $nom,
        string $prenom,
        string $dateNaissance,
        string $villeNaissance,
        string $cin
    ) {
        // TODO : initialiser les 5 attributs avec $this->
        $this->nom = $nom ; 
        $this->prenom = $prenom ;
        $this->dateNaissance = $dateNaissance ;
        $this->villeNaissance = $villeNaissance ;
        $this->cin = $cin ;
    }

    // ----- Méthode publique -----
    public function getName(): string {
        return "$this->prenom $this->nom";
    }
    // ----- Méthode privée -----
    private function getAge(): int {
        $naissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();
        return $naissance->diff($aujourdhui)->y ;
    }
}


$p = new Personne("Hichami", "Amine", "2000-04-16", "Marrakech", "EE12345");

echo $p->getName() . PHP_EOL;   // à vous de prédire le résultat
echo $p->nom . PHP_EOL;

echo $p->cin;

?>