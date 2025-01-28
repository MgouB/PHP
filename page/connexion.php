<?php
    require_once 'header.php';
?>
<H1>Connexion</H1>
<form method="POST">
    <h5>EMAIL:</h5>
<input type="email" id="email" name="email" placeholder="Entrez votre email :"/><br>
    <br/>
    <h5>MOTS DE PASSE:</h5>
<input type="password" id="password" name="password" placeholder="mots de passe:"/><br>
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

        
    
