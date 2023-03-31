<?php 
class Tache {

    public $id ;
    public $titre ;
    public $descriptions ;
    public $date_echeance ; 
    public $date_creation ;
    public $status ;

    public function __construct( $titre , $descriptions , $date_echeance  , $status){
        // $this->id = $id ;
        $this -> titre = $titre;
        $this->descriptions = $descriptions;
        $this->date_echeance = $date_echeance;
        $this->date_creation = date("d-m-Y ");
        $this->status = $status;
        
    }
    public function afficherInfoTache() 
    {
        echo  $this->id . "Titre de la tache : " . " ".$this->titre   . "\n" . "Descriptions de la tache : " .  $this->descriptions    . " \n ". "Date de création de la tache :" . $this->date_creation  . " \n". "Date d'échéance de la tache :" . $this->date_echeance . " \n". "Statut de la tache :" .$this->status ;
    }


}