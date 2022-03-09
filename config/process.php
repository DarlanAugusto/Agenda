<?php 

session_start();

include_once("conexao.php");
include_once("url.php");


$id;

if(!empty($_GET)) {
    $id = $_GET["id"];
}
//Retorna o dado de um contato apenas

if(!empty($id)) {

    $query = "SELECT * FROM contacts WHERE id = :id";

    $stmt = $con->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $contact = $stmt->fetch();


} else {

$contacts = [];

//retorna todos os contatos
$query = "SELECT * FROM contacts";

$stmt = $con->prepare($query);

$stmt->execute();

$contacts = $stmt->fetchAll();
}




?>