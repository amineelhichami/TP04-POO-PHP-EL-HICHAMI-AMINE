<?php
class Voiture {
    public string $couleur;
    public int $vitesse;

    public function __construct(string $couleur = "Blanche", int $vitesse = 0) {
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

$v1 = new Voiture();               // valeurs par défaut
$v2 = new Voiture("Rouge", 50);    // valeurs personnalisées
$v1->afficher();
$v2->afficher();

$noire = new Voiture("Noire") ;
$v120 = new Voiture(120) ;
// echo $noire ;
// echo $v120 ;
?>