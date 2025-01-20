<?php
    require_once 'header.php';
?>

<form method="POST">
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom :"/>
    <br/>
    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom :"/>
    <br/>
    <input type="email" id="email" name="email" placeholder="Entrez votre email :"/>
    <br/>
    <input type="text" id="sujet" name="sujet" placeholder="Sujet :"/>
    <br/>
    <textarea  name="message" rows="10" cols="60" placeholder="Entrez votre message :"></textarea>
    <br/>
    <input type="submit" id="envoiContact" name="envoiContact" value="Envoyer ma demande"/>
</form>

<?php

    if (isset($_POST['envoiContact'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];

        if (empty($nom)){
            echo "Vous avez oublié de saisir votre nom";
        }elseif (empty($prenom)){
            echo "Vous avez oublié de saisir votre prénom";
        }elseif (empty($email)){
            echo "Vous avez oublié votre mail";
        }elseif (empty($sujet)){
            echo "Vous avez oublié de saisir l'objet de votre requete";
        }elseif (empty($message)){
            echo "Vous n'avez pas écrit de message";
        } else {
            echo "Votre prise de contact a bien été prise en compte.<br>";
            echo "<br>".$nom." ".$prenom." a demandé un contact pour le motif suivant : \"".$sujet."\".<br>";
            //                                                                           ^          ^
            // Pour afficher le caractère " -> on met un antislash devant : \"          içi       et là
    
            echo "Envoyé depuis : ".$email." contenant le message suivant : <br>";
            echo $message;
        }

        
    }

    require_once 'footer.php';
?>