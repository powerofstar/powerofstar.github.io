<?php

class User{

    public function login($email, $passw){
        global $pdo;

        $sql = "SELECT * FROM users WHERE email = :email AND passw = :passw";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->bindValue("passw", md5($passw));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['sessionuserid'] = $dado['userid'];

            return true;
        }else{
            return false;
        }
    }

    public function register($email){
        global $pdo;

        $sql = "SELECT * FROM users WHERE email = :email";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['sessionuserid'] = $dado['userid'];

            return true;
        }else{
            return false;
        }
    }

    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT * FROM users WHERE userid = :userid";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("userid", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;

    }
}

?>