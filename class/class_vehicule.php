<?php

use function PHPSTORM_META\type;

class Vehicule{          
/*-----------------------------------------------------  
                           Attributs :         
-----------------------------------------------------*/ 
        public $nomVehicule ;         
        public $nbrRoue;         
        public $vitesse ;         
/*-----------------------------------------------------      
                       Fonctions :         
-----------------------------------------------------*/         
//fonction démarrer le véhicule         
    public function detect(){             
        if ($this->nbrRoue === 2){
            $type = "Ce véhicule est une moto";
        }  
            
        else if ($this->nbrRoue === 4){
            $type = "Ce véhicule est une voiture"; 
        }
        else {
            $type = "Nous ne connaissons pas ce type de véhicule";
        }
            return $type;
        }    
            
            
    public function boost(){
        $vitesse50 = $this->vitesse+50;

        return $vitesse50;

    }

    public function plusRapide(){
        foreach ($this->Vehicule as $clef => $valeur){
            
            echo $clef. ' => ' .$valeur. '<br>';
            
            foreach ($this->vitesse as $v => $val){
                $i = 0;
                if ($val > $i ){
                    $i = $val;
                    return $i;
                }

            }
        }
    }

     

} 
     


     
     
?>