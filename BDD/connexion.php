<?php
require_once "identifiant.php";
try {
    $dbh = new PDO('mysql:host='.$serveur.';dbname='.$bd,$login,$mdp);
} catch (PDOException $e) {
    $dbh = null;
}

?>