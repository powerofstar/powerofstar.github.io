<?php
  $webuser = str_replace("powerofstar/acess/animes/watch/player.php/", "", $_SERVER["REQUEST_URI"]);
    if(substr($webuser, 1, strlen($webuser))=="logout.php"){
    }else{
      $name = substr($webuser, 1, strlen($webuser));
      echo $name;
      $filename = "uploads/$name";

      if (file_exists($filename)) {
          echo "O arquivo $filename existe";
          echo "<div>";
          echo "
          <video width=320 height=240 controls>
            <source src=$filename type=video/mp4>
          </video>";
          echo "</div>";
      } else {
          echo "O arquivo $filename não existe";
      }
    }
?>