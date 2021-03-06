<!DOCTYPE html>
<!-- Criado por iSonork -->
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Power of Star - Login</title>
    <link rel="icon" href="https://powerofstar.github.io/data/image/website_logo.png">
    
    <link rel="stylesheet" href="login/style.css">
    
  </head>
  <body style="background-color:#181414;"
      background="https://powerofstar.github.io/data/image/website_background.png"
    >
      
      <div class="loader">
        <div class="ring"></div>
      </div>
      
      <div class="content">
        <div class="text">
       <form class="form-singin" action="logar.php" method="POST">
         <div class="card" style="margin: auto;">
           <div class="card-top">
             <img class="loginpng" src="login/website_user.png" alt="">
             <h2 class="title">Power of Star</h2>
             <p style="text-align:center;";
             >
               <a style="text-align: center" href="singup.php">Não tem uma conta?</a>
               <div>
               <strong>Entrada<strong>
              </div>
             </p>
           </div>

           <div class="card-group">
             <label for="inputEmail">Email</label>
             <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Digite seu email" required>
            </div>

           <div class="card-group">
             <label for="inputPassword">Senha</label>
             <input type="password" name="passw" id="inputPassword" class="form-control" placeholder="Digite sua senha" required>
           </div>

           <div class="card-group che">
             <label><input type="checkbox"> Lembrar de mim</label>
           </div>

           <div class="card-group btn">
             <button type="submit">Entrar</button>
           </div>
         </div>
       </form>
        
      </div>
    </div>
    <div class="image"></div>
    
    <script>
         const loader = document.querySelector(".loader");
         window.onload = function(){
           setTimeout(function(){
             loader.style.opacity = "0";
             loader.style.background = "#333131";
             setTimeout(function(){
               loader.style.display = "none";
             }, 500);
           },1500);
         }
      </script>
    
  </body>
</html>