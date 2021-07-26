<html>
    <head>
        <title>Ver Video</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
          <a class="nav-link active" aria-current="page" href="http://localhost/powerofstar/access/animes.php" alt='Broken Link'>Animes</a>
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

      <?php
        $webuser = str_replace("powerofstar/access/animes/watch/player.php/", "", $_SERVER["REQUEST_URI"]);
          if(substr($webuser, 1, strlen($webuser))=="logout.php"){
          }else{
            $name = substr($webuser, 1, strlen($webuser));
            $filename = "uploads/$name";

            $url = substr($name, 0, strlen($name));
            $extens = substr($name, strlen($name)-4, strlen($name));
            if(substr($name, strlen($name)-4, strlen($name))==".mp4"){
              if (file_exists($filename)) {
                  echo "<title style=text-align:center;>O arquivo $filename existe</title>";
                  echo "<div>";
                  echo "
                  <video width=320 height=240 controls>
                    <source src=$filename type=video/mp4>
                  </video>";
                  echo "</div>";
              }else{
                  echo "O arquivo $filename não existe";
              }
            }else{
              if(is_dir("linkup/$name")){
                $fileList = "linkup/$name/";
                $afilename = scandir($fileList);
                if($afilename){
                    $ffname = $afilename[2];
                    if (file_exists("linkup/$name/$ffname")) {
                      $realname = substr($ffname, 0, strlen($ffname)-5);

                      require 'playerload.php';
                      $u = new Player();
                      $u->load($realname);
                      /*if($name=="One-Piece-ep984"){
                        echo "<iframe width=640 height=360 frameborder=0 src=https://mega.nz/file/8ctWSQhS#-yFxaXgwerz7AgROLHu7yp_ZHi-DyYjC6Ly_cjNLlhQ allowfullscreen ></iframe>";
                      }
                      echo "<iframe width=640 height=360 frameborder=0 src=https://mega.nz/file/$realname allowfullscreen ></iframe>";*/
                  }else{
                    echo "2O arquivo $filename não existe";
                  }
                }else{
                  echo "1O arquivo $filename não existe";
                }
              }else{
              echo "0O arquivo $filename não existe";
            }
          }
        }
      ?>
  </body>
</html>