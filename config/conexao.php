<?php 

$host = "localhost";
$username = "root";
$password = "$$$2311@03";
$db = "agenda";

try {

    $con = new PDO("mysql:host=$host;dbname=$db",$username, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {

    $error = $e->getMessage();
    echo "Erro: $error";
}

?>