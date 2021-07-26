<?php
//require 'verify.php';

//if(isset($_SESSION['sessionuserid']) && !empty($_SESSION['sessionuserid'])): ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home/style.css">
</head>
<body style="background-color:#181414;"
      background="https://powerofstar.github.io/data/image/website_background.png"
    >
   
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">View Animes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Conteúdos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://localhost/powerofstar/access/animes.php" alt='Broken Link'>Animes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Mangás</a></li>
          </ul>
        </li>
      </ul>
      <input class="form-control me-2" type="text" id="myInput" placeholder="Buscar por títulos" aria-label="Search">
          <a class="nav-link dropdown-toggle" id="navbarUser" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            username
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarUser" style="margin-left:1150px">
            <li><a class="dropdown-item" style="visibility:hidden;" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" style="visibility:hidden;" href="http://localhost/powerofstar/access/logout.php" alt='Broken Link'>Deslogar</a></li>
          </ul>
          <ul id="myUL" style="content-visibility:hidden;">
            <li><a href="#">One Piece</a></li>
            <li><a href="#">Boku No Hero</a></li>
            <li><a href="#">Tokyo Revengers</a></li>
          </ul>
      <div>

    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<div class="homecard">
  <div class="row">
  <div class="col-sm-6" style="width:240px;margin-left: -125px;margin-top: 40px;">
    <div class="card text-center text-white bg-dark mb-3">
      <div class="card-header">Aqui você encontra</div>
      <div class="card-body">
        <h5 class="card-title">Animes</h5>
        <p class="card-text">Nossa página de animes, confira o melhor dos animes.</p>
        <a href="http://localhost/powerofstar/access/animes.php" alt='Broken Link' class="btn btn-dark" style="width:100px"><strong>Conferir</strong></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="width:240px;margin-left: 125px;margin-top: -249px;">
    <div class="card text-center text-white bg-dark mb-3">
      <div class="card-header">Aqui você encontra</div>
      <div class="card-body">
        <h5 class="card-title">Mangás</h5>
        <p class="card-text">Nossa página de mangás, confira o melhor dos mangás.</p>
        <a href="#" class="btn btn-dark" style="width:100px"><strong>Conferir</strong></a>
      </div>
    </div>
  </div>
</div>

</div>

</body>
</html>

<?php //else: header("Location: login.php"); endif; ?>