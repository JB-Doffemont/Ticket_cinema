<?php

function displayChoix () {
    if (isset ($_POST["choixTicket"])) {
    if  ($_POST["choixTicket"] == "ticketCinema") {
        
        // Affichage des options de choix pour le cinema
        echo "<label>Choisissez votre film :</label>".
            "<select name='choixFilm' id='choixFilm'>".
            "<option value='Film'>Votre film</option>".
            "<option value='Spiderman'>Spiderman</option>".
            "<option value='Batman'>Batman</option>".
            "</select>";
    }
    else if ($_POST["choixTicket"] == "ticketTheatre") {
        
        // Affichage des options de choix pour le theatre
        echo "<label>Choisissez votre pièce :</label>".
        "<select name='choixPiece' id='choixPiece'>".
        "<option value='Piece'>Votre pièce</option>".
        "<option value='Avare'>L'avare Molière</option>".
        "<option value='Phedre'>Phèdre Jean Racine</option>".
        "</select>";
    }
    else if ($_POST["choixTicket"] == "choix") {
        echo "Choisir une option svp !";
    }
    }
}







?>