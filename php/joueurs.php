<?php
require_once 'classe.php';
class Joueurs{
    // ATTRIBUTS
   public $nom;
   public $perso;
   public $coeurs;
   // CONSTRUCTEURS
   public function __construct($nom, $perso, $coeurs) {
    $this->nom = $nom;
    $this->perso = $perso;
    $this->coeurs = $coeurs;
}
   // GETTERS
   public function getNom() {
       return $this->nom;
   }
   public function getPerso() {
    return $this->perso;
}
   public function getCoeurs() {
       return $this->coeurs;
   }
   // SETTERS
   public function setNom($setNom) {
       $this->nom = $setNom;
   }
   public function setPerso() {
    return $this->perso;
}
   public function setCoeurs($setCoeurs) {
       return $this->coeurs = $setCoeurs;

   }
   // METHOD
   
   public function perdreVie($nombreVies) {
    // Convertir la valeur de coeurs en entier
    $coeurs = intval($this->coeurs);
    // Si le nombre de vies restantes est supérieur ou égal à celui perdu
    if ($coeurs >= $nombreVies) {
        // Soustraire le nombre de vies perdues
        $this->coeurs = $coeurs - $nombreVies;
    } else {
        // Si le nombre de vies restantes est inférieur, mettre à zéro
        $this->coeurs = 0;
    }
}


}
?>