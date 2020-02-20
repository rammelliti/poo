<?php
class Utilisateur{
    private $nom;
    private $prenom;
    private $langue='fr-FR';
    private $timestamp;


public function __construct($prenom,$nom){ 

    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->timestamp=time(); 

}

public function __destruct() {
    echo "<p><strong>Suppression de $this->nom</strong></p>";
}   
    
public function __toString() {
    return "__toString = $this->nom - $this->prenom";
}  
public function getNom(){
    return $this->nom;
}
 public function setNom($nom){
     $this->nom=$nom;
 }   
 public function setLangue($langue){
     $this->langue=$langue;
 }  
private function miseEnFormeTimestamp(){
    setlocale(LC_TIME, $this->langue);
    return strftime('%c',$this->timestamp);
} 
public function information(){
    $creation=$this->miseEnFormeTimestamp();
    return "$this->nom $this->prenom - $creation";
}
}

