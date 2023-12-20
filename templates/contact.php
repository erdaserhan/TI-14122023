<?php include('inc/banniere.php'); ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Contact</title>
    </head>
    <body>
    <main>
        <h1>Pour nous contacter</h1>
        <p class="picpage"><img src="img/contacts.jpg" alt="" /></p>
        <h3>Pour nous laisser un commentaire ou pour obtenir un renseignement complémentaire, remplissez le formulaire ci-dessous :</h3>
                
         <form id="form1" name="form1" method="post" class="contact" action="contact.php" >
            <div><label for="nom">NOM : </label><input name="nom" type="text" id="nom" size="50" /></div>
            <div><label for="prenom">PRENOM : </label><input name="prenom" type="text" id="prenom" size="50" maxlength="50" /></div>
            <div><label for="ville">VILLE : </label><input name="ville" type="text" id="ville" size="50" /></div>
            <div><label for="email">E-MAIL : </label><input name="email" type="email" id="email" size="50" /></div>
            <div><label for="message">COMMENTAIRES : </label><textarea name="message" id="message" cols="40" rows="5"></textarea></div>
             <div><input type="submit" id="submit" value="Envoyer votre message" /></div>
          </form>
        </main>
        </div>
    </body>
</html>