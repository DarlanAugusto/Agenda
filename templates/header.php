<?php

include_once("config/url.php");
include_once("config/process.php");

//limpa a mensagem

if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $BASE_URL?>css/styles.css">
</head>
<body>

<header>

<nav>
<a href="<?=$BASE_URL?>index.php"><i class="fa-solid fa-clipboard-list"></i></a>
    <ul>
        <li><a id="home-link" href="<?php echo $BASE_URL?>index.php">Agenda</a></li>
        <li><a href="<?php echo $BASE_URL?>create.php">Adicionar contato</a></li>
    </ul>
</nav>

</header>
