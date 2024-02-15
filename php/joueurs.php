<?php
class Joueurs{
    // ATTRIBUTS
   public $nom;
   public $coeurs;
   // CONSTRUCTEURS
   public function __construct($nom, $coeurs) {
       $this->nom = $nom;
       $this->coeurs = $coeurs;
       }
   // GETTERS
   public function getNom() {
       return $this->nom;
   }
   public function getCoeurs() {
       return $this->coeurs;
   }
   // SETTERS
   public function setNom($setNom) {
       $this->nom = $setNom;
   }
   public function setVies($setCoeurs) {
       $this->coeurs = $setCoeurs;
   }
   // METHOD
}
?>