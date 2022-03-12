<?php 

session_start();

include_once("conexao.php");
include_once("url.php");

$data = $_POST;

if(!empty($data)) {

    //Criar contato 

    if($data["type"] === "create") {
        
        $nome = $data["nome"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (nome, phone, observations) VALUES (:nome, :phone, :observations)";
    
        $stmt = $con->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";
        
        } catch(PDOException $e) {
        
            $error = $e->getMessage();
            echo "Erro: $error";
        } 

    } else if($data["type"] === "edit") {

        $nome = $data["nome"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts SET nome = :nome, phone = :phone, observations = :observations WHERE id = :id";

        $stmt = $con->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";
        
        } catch(PDOException $e) {
        
            $error = $e->getMessage();
            echo "Erro: $error";
        } 

    }

    header("Location:" . $BASE_URL . "../index.php");

    } else {
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
}

//Fechar conexão

$con = null;


?>