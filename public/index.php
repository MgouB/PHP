
<?php 

require_once '../page/header.php';
require_once '../BDD/connexion.php';

if ($dbh){
if (isset($_GET['page'])) {

  switch ($_GET['page']){
    case 'contact':require_once '../page/contact.php';
     break;
    case 'calcul':require_once '../page/calcul.php';
     break;
    case 'accueil':require_once '../page/accueil.php';
     break;
    case 'connexion':require_once '../page/connexion.php';
     break;
    case 'inscription' :require_once '../page/inscription.php';
     break;
    default:require_once '../page/404.php';
     break;

     
  }
} else {
  require_once '../page/accueil.php';
}
} else {echo 'site en maintenance';}
require_once '../page/footer.php';
?>
