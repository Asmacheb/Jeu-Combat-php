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
 
   public function setCoeurs($setCoeurs) {
       return $this->coeurs = $setCoeurs;

   }
   // METHOD
   
//    public function perdreVie($nombreVies) {
   
//     $coeurs = intval($this->coeurs);
   
//     if ($coeurs >= $nombreVies) {
       
//         $this->coeurs = $coeurs - $nombreVies;
//     } else {
        
//         $this->coeurs = 0;
//     }
}

?>