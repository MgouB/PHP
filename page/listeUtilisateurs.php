<?php 
echo "Liste des utilisateurs:";
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Ville</th>
      <th scope="col">Code Postal</th>
      <th scope="col">Adresse</th>
      <th scope="col">Téléphone</th>
    </tr>
  </thead>
  <tbody>
<?php
$stmt = $dbh->prepare ("SELECT nom,prenom,email,datenaissance,ville,codepostal,rue,telephone FROM inscription");
$stmt -> execute();
$liste=$stmt -> fetchAll();
foreach($liste as $ligne){
 echo '<tr class="table table-hover">';
 echo '<td>' .$ligne["nom"].'</td><td>' .$ligne["prenom"].'</td><td>' .$ligne["email"].'</td><td>' .$ligne["datenaissance"].'</td><td>' .$ligne["ville"].'</td><td>' .$ligne["codepostal"].'</td><td>' .$ligne["rue"].'</td><td>' .$ligne["telephone"].'</td>';
 echo '</tr>';
}
?>  
  </tbody>
</table>