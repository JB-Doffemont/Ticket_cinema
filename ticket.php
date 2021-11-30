<?php 
include_once ("ticketCinema.php"); // Chargement de la classe ticketCinema
include_once ("ticketTheatre.php"); // Chargement de la classe ticketCinema
class Ticket {

    // On définit la liste des propriétés caractérisant chaque instance de Ticket
    protected string $date;
    protected int $siege;
    protected  $tarif;

    // constructeur
    public function __construct ($date, $siege, $tarif) 
    {
        $this->date = $date;
        $this->siege = $siege;
        $this->tarif= $tarif;
    }

    // methode pour créer un numéro de ticket unique
  public function numeroUnique () {
      $time = strtotime($this->date);
      $newDate = date("m-y", $time);
      return $newDate." ".rand(10, 99); 
  }

}

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['date']) // isset me permet de m'assurer que la variable existe bien dans la requête
                && isset($_POST['siege']) 
                && isset ($_POST['tarif']))
             {
                    // Affectation des valeurs dans des variables
                    $date = $_POST['date'];
                    $siege = $_POST ['siege'];
                    $tarif = $_POST ['tarif'];
                    
                    //  j'affecte leurs valeurs au moment de l'instance
                    $ticket = new Ticket ($_POST['date'], $_POST['siege'], $_POST['tarif']);
                    
                    // conditions  et instanciation en fonction du choix utilisateur
                    if (isset ($_POST['choixFilm'])) {
                    $choixFilm = $_POST['choixFilm'];
                    $ticketCinema = new TicketCinema ($date, $siege, $tarif, $choixFilm);

                    // Affichage du ticket cinema
                    echo $ticketCinema->displayCinema();
                    }

                    else if (isset ($_POST['choixPiece'])) {
                    $choixPiece = $_POST['choixPiece'];
                    $ticketTheatre = new TicketTheatre ($date, $siege, $tarif, $choixPiece);
                   
                    // Affichage du ticket theatre
                    echo $ticketTheatre->displayTheatre ();
                    }
                    // Message si pas de choix
                    else {
                        echo "Choisissez une activité !";
                    }

            }
            
            }
        

?>
