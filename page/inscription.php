
    

<form method="POST"><br>
    <h5>Nom:</h5>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom :"/><br>
    <br/><h5>Prénom:</h5>
    <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prénom :"/><br>
    <br/><h5>Mail:</h5>
    <input type="email" id="email" name="email" placeholder="Entrez votre email :"/><br>
    <br/><h5>Mots de Passe:</h5>
    <input type="password" id="password" name="mdp" placeholder="entrez votre mot de passe :"/><br>
    <br/><h5>Date de naissance:</h5>
    <input type="date" id="datenaissance" name="datenaissance" placeholder="Entrez votre date de naissance :"/><br>
    <br/><h5>Ville:</h5>
    <input type="text" id="ville" name="ville" placeholder="Entrez votre ville :"/><br>
    <br/><h5>Code Postal:</h5>
    <input type="text" id="codepostal" name="codepostal" placeholder="Entrez votre code postal :"/><br>
    <br/><h5>Adresse:</h5>
    <input type="text" id="rue" name="rue" placeholder="Entrez votre rue:"/><br>
    <br/><h5>Numéro de téléphone:</h5>
    <input type="tel" id="telephone" name="telephone" placeholder="Entrez votre numéro :"/><br>
    <br/>
    <input type="submit" id="envoiContact" name="envoiContact" value="Envoyer ma demande"/><br>
</form>


<?php

    if (isset($_POST['envoiContact'])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $mdp= $_POST['mdp'];
        $datenaissance = $_POST['datenaissance'];
        $ville = $_POST['ville'];
        $codepostal = $_POST['codepostal'];
        $rue = $_POST['rue'];
        $telephone = $_POST['telephone'];

        if (empty($nom)){
            echo "Vous avez oublié de saisir votre nom";
        }elseif (empty($prenom)){
            echo "Vous avez oublié de saisir votre prénom";
        }elseif (empty($email)){
            echo "Vous avez oublié votre mail";
        }elseif (empty($mdp)){
            echo "Vous avez oublié de votre mot de passe";
        }elseif (empty($datenaissance)){
            echo "Vous n'avez pas votre date de naissance";
        }elseif (empty($ville)){
            echo "Vous avez oublié votre ville";
        }elseif (empty($codepostal)){
            echo "Vous devez mettre votre votre code postal";
        }elseif (empty($rue)){
            echo "Vous devez mettre votre rue";
        }elseif (empty($telephone)){
            echo "Vous devez mettre votre numéro";
        } else {
            $stmt = $dbh->prepare("INSERT INTO inscription (nom,prenom,email,mdp,datenaissance,ville,codepostal,rue,telephone) VALUES (:nom,:prenom,:email,:mdp,:datenaissance,:ville,:codepostal,:rue,:telephone)");
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':mdp', $mdp);
            $stmt->bindParam(':datenaissance', $datenaissance);
            $stmt->bindParam(':ville', $ville);
            $stmt->bindParam(':codepostal', $codepostal);
            $stmt->bindParam(':rue', $rue);
            $stmt->bindParam(':telephone', $telephone);
            $stmt->execute();
            echo "Votre prise d'information a bien été prise en compte.<br>";
        }

        
    }

    require_once 'footer.php';
?>