<?php

class Personnages{

    // ATTRIBUTS
    public $nom;
    public $image;
    // CONSTRUCTEURS

    public function __construct($nom,  $image) {
        $this->nom = $nom;
        $this->image = $image;
        }
    // GETTERS

    public function getNom() {
        return $this->nom;
    }
    public function getImage() {
        return $this->image;
    }
    // SETTERS

    public function setNom($setNom) {
        $this->nom = $setNom;
    }
   
    public function setImage($setImage) {
        $this->image = $setImage;
    }
    // METHOD
   
}
class Guerrier extends Personnages {
    public function attaqueText() {
        return "L'Attaque permet de d'enlever 3 vies à l'adversaire)";
    }
   
}
class Mage extends Personnages {
    // Méthode 
    public function attaqueText() {
        return "L'Attaque permet de d'enlever 2 vies à l'adversaire)";
    }
  
}
class Pretre extends Personnages {
    // Méthode 
    public function attaqueText() {
        return "L'Attaque permet de s'ajouter une vie";
    }
   
}
class Archer extends Personnages {
    // Méthode 
    public function attaqueText() {
        return "L'Attaque permet de d'enlever une vie à l'adversaire";
    }
   
}
?>