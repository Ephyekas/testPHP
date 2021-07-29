<?php
  class Maison{          
      /*-----------------------------------------------------                            
      
      Attributs :         
      -----------------------------------------------------*/         
      public $nom ;         
      public $longeur ;          
      public $largeur ; 
      public $nbrEtage  ;       
      /*-----------------------------------------------------                             
      Fonctions :         
      -----------------------------------------------------*/         
      //fonction démarrer le véhicule         p
      public function surface(){             
          $surface = $this->longeur * $this->largeur; 
          
          return $surface;
        }     
        public function etage(){             
            $etage = $this->longeur * $this->largeur/ $this->nbrE; 
            
            return $etage;
          }     
    } 

    $maison = new Maison();     
    //ajout de valeur aux attributs de la classe Vehicule     
    $maison->nom= "Le grande maison des animaux";     
    $maison->longeur= 8;     
    $maison->largeur= 10;
    $maison->nbrE= 2;

    //utilisation de la méthode démarrer     
    $maison->surface();
    $maison->etage();

?>