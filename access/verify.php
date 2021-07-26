<?php

require 'conexao.php';

if(isset($_SESSION['sessionuserid']) && !empty($_SESSION['sessionuserid'])){

    require_once 'User.Class.php';
    $u = new User();

    $userLogged = $u->logged($_SESSION['sessionuserid']);
    $username = $userLogged['username'];
    $email = $userLogged['email'];
    $created = $userLogged['created'];

}else{
    header("Location: login.php");
}


?>