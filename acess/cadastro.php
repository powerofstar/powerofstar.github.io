<?php
    include_once 'conexao.php';
    
    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
        require 'User.Class.php';
        $u = new User();
        if($u->register($_SESSION['email']) == true){
            header("Location: home.php");
        }else{
            header("Location: singup.php");
        }
    }else{
        header("Location: singup.php");
    }
?>