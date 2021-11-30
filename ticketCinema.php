<?php

require_once ("ticket.php"); // Chargement de la classe ticket

class TicketCinema extends Ticket {

    // on définit la liste des nouvelles propriétés qui s'ajoutent à celles de la classe mère
    protected $choixFilm;
    protected $salle;
    protected $age_min;
    protected $horaire;

    public function __construct ($date, $siege, $tarif, $choixFilm) { 
        parent::__construct ($date, $siege, $tarif); // utilisation du constructeur provenant de la classe mère

        // on profite du constructeur qu'on a déjà écrit dans la classe mère et on l'enrichit ici
        $this->choixFilm = $choixFilm;
    }


    // on affiche les différents tickets en fonction du choix utilisateur pour le film
    public function displayCinema () {
        if ($this->choixFilm == "Spiderman") {
            $this->age_min = 8;
            $this->salle = 1;
            $this->horaire = "16.00";

        echo "Date de reservation :".$this->numeroUnique()."<br>".
        "Numero de siège :".$this->siege."<br>".
        "Tarif :".$this->tarif."<br>".
        "Choix du film :".$this->choixFilm."<br>".
        "Salle :".$this->salle."<br>".
        "Age minimum requis :".$this->age_min."<br>".
        "Horaire de la séance:".$this->horaire."<br>";
        }
        else if ($this->choixFilm == "Batman") {
            $this->age_min = 12;
            $this->salle = 2;
            $this->horaire = "20.00";

            echo "Date de reservation :".$this->numeroUnique()."<br>".
        "Numero de siège :".$this->siege."<br>".
        "Tarif :".$this->tarif."<br>".
        "Choix du film :".$this->choixFilm."<br>".
        "Salle :".$this->salle."<br>".
        "Age minimum requis :".$this->age_min."<br>".
        "Horaire de la séance:".$this->horaire."<br>";
        }
        else {
            echo "Choisissez un film";
        }    
    }

   
}





?>