

<form method="POST"><br>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom :"/><br>
    <br/>
    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom :"/><br>
    <br/>
    <input type="email" id="email" name="email" placeholder="Entrez votre email :"/><br>
    <br/>
    <input type="text" id="sujet" name="sujet" placeholder="Sujet :"/><br>
    <br/>
    <textarea  name="message" rows="10" cols="60" placeholder="Entrez votre message :"></textarea><br>
    <br/>
    <input type="submit" id="envoiContact" name="envoiContact" value="Envoyer ma demande"/><br>
</form>

<?php

    if (isset($_POST['envoiContact'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
    }
        if (empty($nom)){
            echo "Vous avez oublié de saisir votre nom";
        } elseif (empty($prenom)){
            echo "Vous avez oublié de saisir votre prénom";
        } elseif (empty($email)){
            echo "Vous avez oublié votre mail";
        } elseif (empty($sujet)){
            echo "Vous avez oublié de saisir l'objet de votre requete";
        } elseif (empty($message)){
            echo "Vous n'avez pas écrit de message";
        } else {
            $stmt = $dbh->prepare("INSERT INTO contact (nom,prenom,email,sujet,message) VALUES (:nom,:prenom,:email,:sujet,:message)");
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':sujet', $sujet);
            $stmt->bindParam(':message', $message);
            $r=$stmt->execute();
        }
            if ($r) { 
            echo "Votre prise de contact a bien été prise en compte.<br>";
            echo "<br>".$nom." ".$prenom." a demandé un contact pour le motif suivant : \"".$sujet."\".<br>";
            echo "Envoyé depuis : ".$email." contenant le message suivant : <br>";
        
        echo "erreur";
        
      }
    
?>