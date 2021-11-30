 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
    <?php   require_once ("choixActivite.php"); 
            require_once ("ticketCinema.php");
    ?>


      <h2>Choisissez votre ticket :</h2>
      <form action="" method="POST">
      <select name="choixTicket" id="choixTicket">
      <option value="choix">Votre choix</option>
          <option value="ticketCinema">Ticket Cinema</option>
          <option value="ticketTheatre">Ticket Théatre</option>
        </select>
        <button type="submit">Valider</button>
        </form>
      <br>
      <br>
      <form action="ticket.php" method="post">
      <label for="date">Date :</label>
            <input type="date" name="date" /><br>

            <label for="siege">Siège :</label>
            <input type="number" name="siege"/><br>

            
            <label for="tarif">Choisir Tarif :</label> 
            <select name="tarif" id="tarif">
                <option value="choix">Votre choix</option>
                <option value="Adulte">Tarif Adulte</option>
                <option value="Enfant">Tarif Enfant</option>
            </select>
            <!-- Affichage des pièces ou film en fonction du choix utilisateur -->
            <?php displayChoix(); ?>
            <br>
            <button type="submit">Valider</button>

        </form>


       
 </body>
 </html>