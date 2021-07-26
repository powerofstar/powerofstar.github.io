<?php
/*
include_once 'conexao.php';

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['passw']) && !empty($_POST['passw'])){
    global $pdo;
    require 'User.Class.php';

    $errors = "";
    $username = addslashes($_POST['user']);
    $email = addslashes($_POST['email']);
    $passw = addslashes(md5($_POST['passw']));
    $created = NOW();
    $checkemail = "SELECT * FROM users WHERE email = :email";
    $sql = $pdo->prepare($checkemail);
    $sql->bindValue("email", $email);
    $sql->execute();
    
    if($sql->rowCount() > 0){
        $errors = "Email escolhido já cadastrado.<br>";
    }

    if($errors == ""){
        $newuserinfo = "INSERT INTO users (username, email, passw, created) VALUES (:username, :email, :passw, :created)";
        
        $insertuser = $pdo->prepare($newuserinfo);
        $insertuser->bindParam(':username', $username);
        $insertuser->bindParam(':email', $email);
        $insertuser->bindParam(':passw', $passw);
        $insertuser->bindParam(':created', $created);

        if($insertuser->execute()){
            session_start();
            $_SESSION['email'] = $email;
            header("Location: cadastro.php");
        }else{
            header("Location: singup.php");
        }
    } else {
        header("Location: singup.php");
        echo "<div align=center><font size=2 face=Verdana, Arial, Helvetica, sans-serif>Ocorreu os seguintes erros ao tentar se cadastrar:<br><br>$errors</font></div>";
    }

}else{
    header("Location: singup.php");
}


?>