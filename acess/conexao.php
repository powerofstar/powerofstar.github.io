<?php

session_start();

$localhost = "https://databases-auth.000webhost.com/tbl_sql.php?db=id17313634_powerofstardata";
$user = "root";
$passw = "v(dQNqK~gP5#_Y<(";
$banco = "id17313634_powerofstardata";

global $pdo;

try{

    // objetos com pdo
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}



?>
