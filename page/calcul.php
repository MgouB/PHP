<?php

$resultat = 0; 
if(isset($_POST['btEgal'])){ 
  //var_dump($_POST);
  /*
  Bonjour
  Je suis un test
  sur plusieurs lignes
  */
  $nb1 = $_POST['nb1'];
  $nb2 = $_POST['nb2'];
  $resultat = $nb1 + $nb2;
}

echo 'Cours de PHP';
echo '<br />Le résultat est de '.$resultat;
?>

<form method="POST">
    <input type="number" id="nb1" name="nb1" placeholder="nombre 1" />
    <input type="number" id="nb2" name="nb2" placeholder="nombre 2" />
    <input type="submit" id="btEgal" name="btEgal" value="="/>
</form>