<?php
/*require 'verify.php';

if(isset($_SESSION['sessionuserid']) && !empty($_SESSION['sessionuserid'])): ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="home/style.css">
</head>
<body style="background-color:#181414;"
      background="https://powerofstar.github.io/data/image/website_background.png"
    >
   
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Power of Star</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Usuário</a>
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
      <div class="form-inline my-2 my-lg-0">
          <label style="color:white"><?php echo $username; ?></label>
          <a href="http://localhost/powerofstar/access/logout.php" alt='Broken Link'>Deslogar</a>
      <div>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<?php
    include_once 'conexao.php';
    require_once 'User.Class.php';
    $u = new User();

    $userLogged = $u->logged($_SESSION['sessionuserid']);
    $luserid = $userLogged['userid'];
    $lusername = $userLogged['username'];
    $lemail = $userLogged["email"];
    $lcreated = $userLogged["created"];

    
    $webuser = str_replace("powerofstar/access/user.php/", "", $_SERVER["REQUEST_URI"]);
    if(substr($webuser, 1, strlen($webuser))=="logout.php"){
    
    }else{
        $userid = intval(substr($webuser, 1, strlen($webuser)));

        global $pdo;

        $sql = "SELECT userid FROM users WHERE userid = :userid";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('userid', $userid);
        try{
            $sql->execute();
            if($sql->rowCount() > 0){
                echo("
                
                ");
                echo ("<label style=color:white>Perfil de $lusername</label>");
                echo ("<div>");
                echo ("<label style=color:white>Username: $lusername</label>");
                echo ("</div>");
                echo ("<div>");
                echo ("<label style=color:white>E-mail: $lemail</label>");
                echo ("</div>");
                echo ("<label style=color:white>Conta desde: $lcreated</label>");
                echo ("</div>");
            }else{
                echo ("<label style=color:white>Não encontramos este usuário em nosso banco de dados.</label>");
            }
        }catch(PDOException $e){
            echo "ERRO: ".$e->getMessage();
            exit;
        }
    }
?>

</body>
</html>

<?php else: header("Location: http://localhost/powerofstar/access/login.php"); endif; ?>