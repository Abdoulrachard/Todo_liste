<?php 


class ListeTache {

    public $LiTache= [];

    public function ajouterTache($tache)
    {
          $this->LiTache[]=$tache;
    }
    public function getTaches()
    {
        foreach($this->LiTache as $taches){
            $taches->afficherInfoTache() ;
        }
    }
    public function getTache($id)
    {
        
    }
    public function modifierTache($tache)
    {

    }
    public function supprimerTache($id)
    {

    }

}