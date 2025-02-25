<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hueco Mundo</title>
    <link href="https://bootswatch.com/5/morph/bootstrap.rtl.min.css" rel="stylesheet" >
  </head>
  <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?page=accueil">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=connexion">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=inscription">Inscription</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=contact">Contact</a>
        </li>       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Plus</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index.php?page=calcul">Calculatrice</a>
            <a class="dropdown-item" href="index.php?page=listeContact">Liste des contacts</a>
            <a class="dropdown-item" href="index.php?page=listeUtilisateurs">Liste des utilisateurs</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <body>
