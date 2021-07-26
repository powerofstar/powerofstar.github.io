<?php
//require 'verify.php';

//if(isset($_SESSION['sessionuserid']) && !empty($_SESSION['sessionuserid'])): ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="animes/style.css">
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
          <a class="nav-link active" aria-current="page" href="#">Animes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Conteúdos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Animes</a></li>
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

<div class="navtexts" data-bs-spy="scroll" data-bs-target="#navbar-lateral" data-bs-offset="0" tabindex="0">
  <div class="hot">
    <h4 class="text1" id="hot" style="display: flex;margin-left: 3px;"><span><span></h4>
  </div>
  <div class="now">
    <h4 class="text2" id="now" style="display: flex;margin-left: 3px;"><span><span></h4>
  </div>
  <div class="new">
    <h4 class="text3" id="new" style="display: flex;margin-left: 3px;"><span><span></h4>
  </div>
</div>

<div id="carouselHot" class="carousel slide" data-bs-ride="carousel" style="margin-top:0px">

<div class="bar" style="text-align:center;font-size: 3vw;color:white;margin-top:-45px;padding-left:9px;position:absolute;width:100%;background-color:#212529"></div>
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselHot" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#carouselHot" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselHot" data-bs-slide-to="2"></button>
  </div>
  <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://teamcomics.com.br/wp-content/uploads/2021/05/1618088632.9474.33609.jpg" class="d-block w-100" name="Tokyo Revengers" alt="..." height="500">
      </div>

      <div class="carousel-item">
        <img src="https://i2.wp.com/pupilasembrasas.com.br/wp-content/uploads/2016/07/One-Piece.png?fit=1280%2C720&ssl=1" name="One Piece" class="d-block w-100" alt="..." height="500">
      </div>

      <div class="carousel-item">
        <img src="https://alternativanerd.com.br/wp-content/uploads/2021/05/AN_My-Hero-Academia-THE-MOVIE-World-Heroes-Mission.jpg" name="Boku no Hero" class="d-block w-100" alt="..." height="500">
      </div>
  </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHot" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHot" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<nav id="navbar-lateral" class="navbar navbar-dark bg-dark flex-column align-items-stretch p-3">
  <nav class="nav nav-pills flex-column">
    <div class="btn-group" role="group" style="font-size: 3vw;color:gray;background-color:#212529">
      <li><a class="dropdown-item btn-dark active" href="#hot" style="background-color:#212529;color:white">Destaques</a></li>
      <li><a class="dropdown-item btn-dark active" href="#hot" style="background-color:#212529;color:white">Lançamentos</a></li>
      <li><a class="dropdown-item btn-dark active" href="#hot" style="background-color:#212529;color:white">Novos Títulos</a></li>
    </div>
  </nav>
</nav>

</body>
</html>

<?php //else: header("Location: login.php"); endif; ?>