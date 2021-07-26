<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['passw']) && !empty($_POST['passw'])){

    require 'conexao.php';
    require 'User.Class.php';

    $u = new User();

    $email = addslashes($_POST['email']);
    $passw = addslashes($_POST['passw']);

    if($u->login($email, $passw) == true){
        if(isset($_SESSION['sessionuserid'])){
            header("Location: home.php");
        }else{
            header("Location: login.php");
        }
    }else{
        header("Location: login.php");
    }

}else{
    header("Location: login.php");
}


?>