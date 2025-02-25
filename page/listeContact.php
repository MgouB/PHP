<?php 
echo "Liste des contacts";
?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Sujet</th>
    </tr>
  </thead>
  <tbody>
<?php
$stmt = $dbh->prepare ("SELECT nom,prenom,email,sujet,message FROM contact");
$stmt -> execute();
$liste=$stmt -> fetchAll();
foreach($liste as $ligne){
 echo '<tr class="table table-hover">';
 echo '<td>' .$ligne["nom"].'</td><td>' .$ligne["prenom"].'</td><td>' .$ligne["email"]. '</td><td>' .$ligne["sujet"]. '</td>';
 echo '</tr>';
}
?>  
  </tbody>
</table>