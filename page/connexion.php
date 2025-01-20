<?php
    require_once 'header.php';
?>

<form method="POST">
<input type="email" id="email" name="email" placeholder="Entrez votre email :"/>
    <br/>
<input type="password" id="password" name="password" placeholder="mots de passe:"/>
    <br/>
    <input type="submit" id="envoiContact" name="envoiContact" value="se connecter"/>
</form>

<?php
$email='';
$password='';

    if (isset($_POST['envoiContact'])) {

        
        $email = $_POST['email'];
        $password = $_POST['password'];
      
        if (empty($email)){
            echo "Vous avez oublié votre mail";
        }elseif (empty($password)){
            echo "Vous avez oublié de saisir votre mots de passe";
        } else {
            echo "Votre connexion a bien été prise en compte.<br>";
            
        }
    }    

        
    
