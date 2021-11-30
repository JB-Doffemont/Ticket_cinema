<?php

require_once ("ticket.php"); // Chargement de la classe

class TicketTheatre extends Ticket {

    // on définit la liste des nouvelles propriétés qui s'ajoutent à celles de la classe mère
    protected $choixPiece;
    protected $heure_debut;
    protected $heure_entract;


    public function __construct ($date, $siege, $tarif, $choixPiece) {
        parent::__construct ($date, $siege, $tarif); // utilisation du constructeur provenant de la classe mère

        // on profite du constructeur qu'on a déjà écrit dans la classe mère et on l'enrichit ici
        $this->choixPiece = $choixPiece;
    }



    // on affiche les différents tickets en fonction du choix utilisateur pour le theatre
    public function displayTheatre () {
        if ($this->choixPiece == "Avare") {
            $this->heure_debut = 18.00;
            $this->heure_entract = 20.30;
            

        echo 
        "Date de reservation :".$this->numeroUnique()."<br>".
        "Numero de siège :".$this->siege."<br>".
        "Tarif :".$this->tarif."<br>".
        "Choix de la pièce :".$this->choixPiece."<br>".
        "Heure début de la pièce :".$this->heure_debut."<br>".
        "Horaire de l'entracte :".$this->heure_entract."<br>";
        }
        else if ($this->choixPiece == "Phedre") {
            $this->heure_debut = 18.00;
            $this->heure_entract = 20.30;
            
        echo 
        "Date de reservation :".$this->numeroUnique()."<br>".
        "Numero de siège :".$this->siege."<br>".
        "Tarif :".$this->tarif."<br>".
        "Choix de la pièce :".$this->choixPiece."<br>".
        "Heure début de la pièce :".$this->heure_debut."<br>".
        "Horaire de l'entracte :".$this->heure_entract."<br>";
        }
        else {
            echo "Choisissez un film";
        }    
    }

   
}





?>