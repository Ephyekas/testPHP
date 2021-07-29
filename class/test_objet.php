<?php
require('./class_vehicule.php');

$voiture = new Vehicule();     
//ajout de valeur aux attributs de la classe Vehicule     
$voiture->nomVehicule = "Mercedes CLK";     
$voiture->nbrRoue = 4;  
$voiture->vitesse = 250;   
//utilisation de la méthode démarrer     
$voiture->detect();

echo '<p> Test Vehicule '.$voiture->nomVehicule.'est :'.$voiture->detect().'</p>';


$moto = new Vehicule();     
//ajout de valeur aux attributs de la classe Vehicule     
$moto->nomVehicule = "Honda CBR";     
$moto->nbrRoue = 2;  
$moto->vitesse = 280;   
//utilisation de la méthode démarrer     
$moto->detect();

echo '<p> Test Vehicule '.$moto->nomVehicule.'est :'.$moto->detect().'</p>';

$moto->boost();

echo '<p> Test '.$moto->nomVehicule.'avec une vitesse augmenté des 50  = '.$moto->boost().'</p>';

$Vehicule()->plusRapide();

echo ' le Vehicule le plus rapide est : '.$vitesse->plusRapide().'</p>';

?>